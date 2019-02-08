using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Identity;
using Microsoft.EntityFrameworkCore;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.DependencyInjection;
using ASPNETCoreUserIdentity.Models;
using ASPNETCoreUserIdentity.Services;
using Fundoo_Datas.Models;
using Fundoo_Datas.Infrasturcture;
using Fundoo_BL.Services;

namespace ASPNETCoreUserIdentity
{
    public class Startup
    {
        public Startup(IConfiguration configuration)
        {
            Configuration = configuration;
        }

        public IConfiguration Configuration { get; }

        // This method gets called by the runtime. Use this method to add services to the container.
        public void ConfigureServices(IServiceCollection services)
        {
            services.AddDbContext<ApplicationDbContext>(options =>
                options.UseSqlServer(Configuration.GetConnectionString("DefaultConnection")));

            services.AddIdentity<ApplicationUser, IdentityRole>()
                .AddEntityFrameworkStores<ApplicationDbContext>()
                .AddDefaultTokenProviders();

            //services.AddAuthentication().AddFacebook(facebookOptions =>
            //{
            //    facebookOptions.AppId = Configuration["260713097918922"];
            //    facebookOptions.AppSecret = Configuration["d2e26a8afeea1ae07a53f25d5ce8db05"];
            //});


            //services.AddAuthentication()
            //  .AddCookie(options =>
            //      {
            //          options.LoginPath = "/Account/Unauthorized/";
            //          options.AccessDeniedPath = "/Account/";
            //          options.AccessDeniedPath = "/Notes/";
            //      });


            //Password Strength Setting
            services.Configure<IdentityOptions>(options =>
			{
				// Password settings
				options.Password.RequireDigit = true;
				options.Password.RequiredLength = 8;
				options.Password.RequireNonAlphanumeric = false;
				options.Password.RequireUppercase = true;
				options.Password.RequireLowercase = false;
				options.Password.RequiredUniqueChars = 6;

				// Lockout settings
				options.Lockout.DefaultLockoutTimeSpan = TimeSpan.FromMinutes(30);
				options.Lockout.MaxFailedAccessAttempts = 10;
				options.Lockout.AllowedForNewUsers = true;

				// User settings
				options.User.RequireUniqueEmail = true;
			});

			//Seting the Account Login page
			services.ConfigureApplicationCookie(options =>
			{
				// Cookie settings
				options.Cookie.HttpOnly = true;
				options.ExpireTimeSpan = TimeSpan.FromMinutes(30);
				options.LoginPath = "/Account/Login"; // If the LoginPath is not set here, ASP.NET Core will default to /Account/Login
				options.LogoutPath = "/Account/Logout"; // If the LogoutPath is not set here, ASP.NET Core will default to /Account/Logout
				options.AccessDeniedPath = "/Account/AccessDenied"; // If the AccessDeniedPath is not set here, ASP.NET Core will default to /Account/AccessDenied
				options.SlidingExpiration = true;
			});
            


			// Add application services.
			services.AddTransient<IEmailSender, EmailSender>();

            services.AddMvc();
        }

        // This method gets called by the runtime. Use this method to configure the HTTP request pipeline.
        public void Configure(IApplicationBuilder app, IHostingEnvironment env, IServiceProvider services)
        {
            if (env.IsDevelopment())
            {
                app.UseBrowserLink();
                app.UseDeveloperExceptionPage();
                app.UseDatabaseErrorPage();
            }
            else
            {
                app.UseExceptionHandler("/Home/Error");
            }

            app.UseStaticFiles();

            app.UseAuthentication();

            app.UseMvc(routes =>
            {
                routes.MapRoute(
                    name: "default",
                    template: "{controller=Home}/{action=Index}/{id?}");
            });

            app.Use(async (context, next) =>
            {
                await next();
                if (context.Response.StatusCode == 404 &&
                  !context.Request.Path.Value.StartsWith("/api/"))
                {
                    context.Request.Path = "/index.html";
                    await next();
                }
            });
            app.UseCors(
          options => options.WithOrigins("https://localhost:44387").AllowAnyMethod()
      );

            app.UseStaticFiles();
            app.UseStaticFiles();
            app.UseDefaultFiles();
            app.UseMvcWithDefaultRoute();
        }

        //CreateUserRoles(services).Wait();
    }


	//	private async Task CreateUserRoles(IServiceProvider serviceProvider)
	//	{
	//		var RoleManager = serviceProvider.GetRequiredService<RoleManager<IdentityRole>>();
	//		var UserManager = serviceProvider.GetRequiredService<UserManager<ApplicationUser>>();


	//		IdentityResult roleResult;
	//		//Adding Addmin Role
	//		var roleCheck = await RoleManager.RoleExistsAsync("Admin");
	//		if (!roleCheck)
	//		{
	//			//create the roles and seed them to the database
	//			roleResult = await RoleManager.CreateAsync(new IdentityRole("Admin"));
	//		}
 ////Asign Admin role to the main User here i have given my login id for Admin management
	//		ApplicationUser user = await UserManager.FindByEmailAsync("syedshanumcain@gmail.com");
	//		var User = new ApplicationUser(); 
	//		await UserManager.AddToRoleAsync(user, "Admin"); 

	//	}
	}

