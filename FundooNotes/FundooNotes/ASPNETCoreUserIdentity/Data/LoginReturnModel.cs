using Fundoo_Datas.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ASPNETCoreUserIdentity.Data
{
    public class LoginReturnModel
    {
        public int status { get; set; }
        public ApplicationUser user1 { get; set; }
    }
}
