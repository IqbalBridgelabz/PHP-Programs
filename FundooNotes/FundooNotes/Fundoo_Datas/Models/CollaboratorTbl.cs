using System;
using System.Collections.Generic;
using System.Text;

namespace Fundoo_Datas.Models
{
    public class CollaboratorTbl
    {
        public int ID { get; set; }       
        public int NoteId { get; set; }
        public string Email { get; set; }
        public string SharedId { get; set; }
    }
}
