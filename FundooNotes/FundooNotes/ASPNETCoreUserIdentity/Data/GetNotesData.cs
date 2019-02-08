using Fundoo_Datas.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ASPNETCoreUserIdentity.Data
{
    public class GetNotesData
    {
        public List<NotesTbl> noteData { get; set; }
        public List<LabelTbl> label { get; set; }
        public List<CollaboratorTbl> collaborator { get; set; }
    }
}
