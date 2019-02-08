using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net.Http;
using System.Threading.Tasks;
using ASPNETCoreUserIdentity.Data;
using Fundoo_BL.Model;
using Fundoo_Datas.Infrasturcture;
using Fundoo_Datas.Models;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Identity;
using Microsoft.AspNetCore.Mvc;

namespace ASPNETCoreUserIdentity.Controllers
{
    
    [Route("api/Notes")]
    public class NotesController : Controller
    {
        private readonly UserManager<ApplicationUser> _userManager;
        private ApplicationDbContext _context;
        public NotesController(ApplicationDbContext context, UserManager<ApplicationUser> userManager)
        {
            _userManager = userManager;
            _context = context;
        }

        //api to add the notes into db
        [HttpPost]
        [Route("GetNotes")]
        public void GetNotes([FromBody]NotesTbl tbl)
        {
            if (ModelState.IsValid)
            {
                var user = new NotesTbl
                {
                    Email = tbl.Email,
                    Content = tbl.Content,
                    Title = tbl.Title,
                    IsArchive = tbl.IsArchive,
                    IsPin = tbl.IsPin,
                    ColorCode = tbl.ColorCode,
                    Reminder = tbl.Reminder,
                    ImageUrl = tbl.ImageUrl,
                    
                };
                int result = 0;
                try
                {
                    _context.tblNotes.Add(user);
                    result = _context.SaveChanges();
                }
                catch (Exception ex)
                {
                    ex.ToString();
                }
            }
        }

        //to get notes
        [HttpGet("GetNotes/{Email}")]
        public object GetNotes(string Email)
        {
            var list = new List<NotesTbl>();
            var label = new List<LabelTbl>();
            var SharingNote = new List<CollaboratorTbl>();
            var Label = from t in _context.tblLabel where t.Email == Email select t;
            foreach (var lbl in Label)
            {
                label.Add(lbl);
            }
            GetNotesData data = new GetNotesData();
            var Notesdata = from t in _context.tblNotes where t.Email == Email select t;          
            
            foreach (var item in Notesdata)
            {              
                list.Add(item);
            }
            var collaborator = from t in _context.tblCollaborator where t.SharedId == Email select t;
            
            foreach (var emaildata in collaborator)
            {
                var noteid = emaildata.NoteId;
                NotesTbl note = _context.tblNotes.Where<NotesTbl>(t => t.ID == noteid).First();
                list.Add(note);                   
            }
            data.noteData = list;
            data.label = label;
            return data;
        }
        
        //to Update the notes
        [HttpPut("UpdateNotes/{ID}")]
        public void UpdateNotes(int ID, [FromBody]NotesTbl tbl)
        {
            NotesTbl note = _context.tblNotes.Where<NotesTbl>(t => t.ID == ID).First();
            note.Title = tbl.Title;
            note.Content = tbl.Content;
            note.IsArchive = tbl.IsArchive;
            note.IsPin = tbl.IsPin;
            note.IsTrash = tbl.IsTrash;
            note.ColorCode = tbl.ColorCode;
            note.Reminder = tbl.Reminder;
            note.ImageUrl = tbl.ImageUrl;
           
           // note.Collaborator = tbl.Collaborator;

            int result = 0;
            try
            {
                result = _context.SaveChanges();
            }
            catch (Exception e)
            {
                e.ToString();
            }
        }

        //to delete the notes from trash
        [HttpDelete("DeleteNotes/{ID}")]
        public void DeleteNotes(int ID)
        {
            var note = _context.tblNotes.Where<NotesTbl>(t => t.ID == ID).First();

            int result = 0;
            try
            {
                _context.tblNotes.Remove(note);
                result = _context.SaveChanges();
            }
            catch (Exception e)
            {
                e.ToString();
            }
        }

        //to create a label
        [HttpPost]
        [Route("AddLabel")]
        public int AddLabel([FromBody]LabelTbl label)
        {


            var labelData = new LabelTbl
            {
                Email = label.Email,
                Label = label.Label
            };
            int result = 0;
            try
            {
                _context.tblLabel.Add(labelData);
                result = _context.SaveChanges();
            }
            catch (Exception e)
            {
                e.ToString();
            }
            return result;
        }

        //to get the label
        [HttpGet("GetLabel/{Email}")]
        public List<LabelTbl> GetLabel(string Email)
        {
            var list = new List<LabelTbl>();
            var Labeldata = from t in _context.tblLabel where t.Email == Email select t;
            try
            {
                foreach (var data in Labeldata)
                {
                    list.Add(data);
                }
                return list;
            }
            catch (Exception e)
            {
                e.ToString();
            }
            return list;
        }


        //to update th label content
        [HttpPut("UpdateLabel/{ID}")]
        public void UpdateLabel(int ID,[FromBody]LabelTbl label)
        {
            LabelTbl note = _context.tblLabel.Where<LabelTbl>(t => t.ID == ID).First();
            note.Label = label.Label;
            int result = 0;
            try
            {
                result = _context.SaveChanges();
            }
            catch (Exception e)
            {
                e.ToString();
            }
        }

        //to delete the label for that particular ID
        [HttpDelete("DeleteLabel/{ID}")]
        public void DeleteLabel(int ID)
        {
            var label = _context.tblLabel.Where<LabelTbl>(t => t.ID == ID).First();
            int result = 0;
            try
            {
                _context.tblLabel.Remove(label);
                result = _context.SaveChanges();
            }
            catch (Exception e)
            {
                e.ToString();
            }
        }

        [HttpPost]
        [Route("AddImage")]
        public async Task<object> AddImage(IFormFile file)
        {
           try
           {
                string path = Path.Combine(Directory.GetCurrentDirectory(), "wwwroot/assets/img", file.FileName);
                var stream = new FileStream(path, FileMode.Create);
                file.CopyToAsync(stream);
                var pathData = stream.Name;
                path = null;               
                stream = null;
                var url = "https://localhost:44387/assets/img/" + file.FileName;
                return Ok(new {data=url});
           }catch(Exception e)
           {
                return null;
           }            
        }

        [HttpPost]
        [Route("ShareCollaborator")]
        public async Task<object> ShareCollaborator([FromBody]CollaboratorViewModel model)
        {
            var user = await _userManager.FindByEmailAsync(model.Collaborator);
            if (user.Email == model.Collaborator)
            {
                return user;
            }
            return null;
        }

        [HttpPost]
        [Route("AddNotesLabel")]
        public bool AddNotesLabel([FromBody]NotesLabelTable model)
        {
            var Labeldata = from t in _context.tblNotesLabel where t.Email == model.Email select t;

            foreach (var data1 in Labeldata.ToList())
            {
                if(data1.NoteId==model.NoteId && data1.LableId == model.LableId)
                {
                    return false;
                }                
            }
            var data = new NotesLabelTable
            {
                Email = model.Email,
                LableId = model.LableId,
                NoteId = model.NoteId
            };
            int result = 0;

            _context.tblNotesLabel.Add(data);
            result = _context.SaveChanges();
            return true;
        }

        [HttpGet("GetNotesLabel/{Email}")]
        public List<NotesLabelTable> GetNotesLabel(string Email)
        {
            var list = new List<NotesLabelTable>();
            var Labeldata = from t in _context.tblNotesLabel where t.Email == Email select t;
            try
            {
                foreach (var data in Labeldata)
                {
                    list.Add(data);
                }
            }
            catch (Exception e)
            {
                e.ToString();
            }
            return list;
        }

        [HttpDelete("DeleteNotesLabel/{ID}")]
        public void DeleteNotesLabel(int ID)
        {
            var label = _context.tblNotesLabel.Where<NotesLabelTable>(t => t.ID == ID).First();
            int result = 0;
            try
            {
                _context.tblNotesLabel.Remove(label);
                result = _context.SaveChanges();
            }
            catch (Exception e)
            {
                e.ToString();
            }
        }

        [HttpPost]
        [Route("AddNotesCollaborator")]
        public bool AddNotesCollaborator([FromBody]CollaboratorTbl model)
        {
            var Labeldata = from t in _context.tblCollaborator where t.Email == model.Email select t;

            foreach (var data1 in Labeldata.ToList())
            {
                if (data1.NoteId == model.NoteId && data1.SharedId == model.SharedId)
                {
                    return false;
                }
            }
            var data = new CollaboratorTbl
            {
                Email = model.Email,
                SharedId= model.SharedId,
                NoteId = model.NoteId
            };
            int result = 0;

            _context.tblCollaborator.Add(data);
            result = _context.SaveChanges();
            return true;
        }

        [HttpGet("GetNotesCollaborator/{Email}")]
        public List<CollaboratorTbl> GetNotesCollaborator(string Email)
        {
            var list = new List<CollaboratorTbl>();
            var Labeldata = from t in _context.tblCollaborator where t.Email == Email select t;
            try
            {
                foreach (var data in Labeldata)
                {
                    list.Add(data);
                }
            }
            catch (Exception e)
            {
                e.ToString();
            }
            return list;
        }

        [HttpDelete("DeleteNotesCollaborator/{ID}")]
        public void DeleteNotesCollaborator(int ID)
        {
            var label = _context.tblCollaborator.Where<CollaboratorTbl>(t => t.ID == ID).First();
            int result = 0;
            try
            {
                _context.tblCollaborator.Remove(label);
                result = _context.SaveChanges();
            }
            catch (Exception e)
            {
                e.ToString();
            }
        }
    }
}
