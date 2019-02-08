using System;
using System.Collections.Generic;
using System.Text;

namespace Fundoo_Datas.Models
{
    public class NotesTbl
    {       
        public int ID { get; set; }
        public string Email { get; set; }
        public string Title { get; set; }
        public string Content { get; set; }
        public string ColorCode { get; set; }
        public string Reminder { get; set; }
        public int IsPin { get; set; }
        public int IsArchive { get; set; }
        public int IsTrash { get; set; }
        public string ImageUrl { get; set; }
    }
}
