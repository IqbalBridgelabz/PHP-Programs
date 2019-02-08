using System;
using System.Collections.Generic;
using System.Net;
using System.Net.Mail;
using System.Text;
using System.Threading.Tasks;

namespace Fundoo_BL.Services
{
    public class EmailSender : IEmailSender
    {
       
        public Task SendEmailAsync(string email, string subject, string message)
        {
        var mess = new MailMessage();
        mess.To.Add(new MailAddress(email));  // replace with valid value 
        mess.From = new MailAddress("sselvi@student.mes.ac.in");  // replace with valid value
        mess.Subject = subject;
        mess.Body = string.Format(message, email, mess.From);
        mess.IsBodyHtml = true;

        using (var smtp = new SmtpClient())
        {
            var credential = new NetworkCredential
            {
                UserName = "sselvi@student.mes.ac.in",  // replace with valid value
                Password = "wahmahvi"  // replace with valid value
            };
            smtp.Credentials = credential;
            smtp.Host = "smtp.gmail.com ";
            smtp.Port = 587;
            smtp.EnableSsl = true;
            smtp.Send(mess);

        }
        return Task.FromResult(0);
        // return Task.CompletedTask;
    }

      
    }
}
