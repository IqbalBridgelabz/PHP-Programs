using Microsoft.AspNetCore.Identity;
using System;
using System.Collections.Generic;
using System.Text;

namespace Fundoo_Datas.Models
{
    public class ApplicationUser : IdentityUser
    {
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string Gender { get; set; }
        public string DateOfBirth { get; set; }
        public string Adhar { get; set; }
        public string Countrycode { get; set; }
        //public string PhoneNumber { get; set; }        
        public string Address { get; set; }
        public string Line2 { get; set; }
        public string State { get; set; }
        public string City { get; set; }
        public string Postalcode { get; set; }
        //public string UserName { get; set; }        
        public string Password { get; set; }
        public string Profile { get; set; }
    }
}
