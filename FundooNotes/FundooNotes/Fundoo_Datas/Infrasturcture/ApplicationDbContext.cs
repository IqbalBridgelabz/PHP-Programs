using Fundoo_Datas.Models;
using Microsoft.AspNetCore.Identity.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Text;

namespace Fundoo_Datas.Infrasturcture
{
    public class ApplicationDbContext : IdentityDbContext<ApplicationUser>
    {
        public ApplicationDbContext(DbContextOptions<ApplicationDbContext> options)
           : base(options)
        {
        }

        public DbSet<NotesTbl> tblNotes { get; set; }
        public DbSet<LabelTbl> tblLabel { get; set; }
        public DbSet<NotesLabelTable> tblNotesLabel { get; set; }
        public DbSet<CollaboratorTbl> tblCollaborator { get; set; }

        //public DbSet<tblLabel> tblLabels { get; set; }
        //public DbSet<tblLabelNotes> tblLabelNotes { get; set; }
        //public DbSet<tblCollaborator> tblCollaborators { get; set; }
        protected override void OnModelCreating(ModelBuilder builder)
        {
            base.OnModelCreating(builder);
            // Customize the ASP.NET Identity model and override the defaults if needed.
            // For example, you can rename the ASP.NET Identity table names and more.
            // Add your customizations after calling base.OnModelCreating(builder);
        }
    }
}
