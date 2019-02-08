(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "./$$_lazy_route_resource lazy recursive":
/*!******************************************************!*\
  !*** ./$$_lazy_route_resource lazy namespace object ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error('Cannot find module "' + req + '".');
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./app/app-routing.module.ts":
/*!***********************************!*\
  !*** ./app/app-routing.module.ts ***!
  \***********************************/
/*! exports provided: AppRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppRoutingModule", function() { return AppRoutingModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _register_register_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./register/register.component */ "./app/register/register.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "../node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _login_login_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./login/login.component */ "./app/login/login.component.ts");
/* harmony import */ var _forgotpwd_forgotpwd_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./forgotpwd/forgotpwd.component */ "./app/forgotpwd/forgotpwd.component.ts");
/* harmony import */ var _resetpassword_resetpassword_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./resetpassword/resetpassword.component */ "./app/resetpassword/resetpassword.component.ts");
/* harmony import */ var _fundoo_fundoo_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./fundoo/fundoo.component */ "./app/fundoo/fundoo.component.ts");
/* harmony import */ var _archive_archive_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./archive/archive.component */ "./app/archive/archive.component.ts");
/* harmony import */ var _remainders_remainders_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./remainders/remainders.component */ "./app/remainders/remainders.component.ts");
/* harmony import */ var _sidenav_sidenav_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./sidenav/sidenav.component */ "./app/sidenav/sidenav.component.ts");
/* harmony import */ var _home_home_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./home/home.component */ "./app/home/home.component.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};











var AppRoutingModule = /** @class */ (function () {
    function AppRoutingModule() {
    }
    AppRoutingModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forRoot([
                    { path: '', redirectTo: 'login', pathMatch: 'full' },
                    { path: 'register', component: _register_register_component__WEBPACK_IMPORTED_MODULE_1__["RegisterComponent"] },
                    { path: 'login', component: _login_login_component__WEBPACK_IMPORTED_MODULE_3__["LoginComponent"] },
                    { path: 'forgotpwd', component: _forgotpwd_forgotpwd_component__WEBPACK_IMPORTED_MODULE_4__["ForgotpwdComponent"] },
                    { path: 'resetpassword', component: _resetpassword_resetpassword_component__WEBPACK_IMPORTED_MODULE_5__["ResetpasswordComponent"] },
                    { path: 'archive', component: _archive_archive_component__WEBPACK_IMPORTED_MODULE_7__["ArchiveComponent"] },
                    { path: 'remainders', component: _remainders_remainders_component__WEBPACK_IMPORTED_MODULE_8__["RemaindersComponent"] },
                    { path: 'home', component: _home_home_component__WEBPACK_IMPORTED_MODULE_10__["HomeComponent"] },
                    {
                        path: 'fundoo', component: _fundoo_fundoo_component__WEBPACK_IMPORTED_MODULE_6__["FundooComponent"], children: [
                            { path: '', component: _sidenav_sidenav_component__WEBPACK_IMPORTED_MODULE_9__["SidenavComponent"] }
                        ]
                    }
                ])
            ],
            exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]],
            declarations: []
        })
    ], AppRoutingModule);
    return AppRoutingModule;
}());



/***/ }),

/***/ "./app/app.component.css":
/*!*******************************!*\
  !*** ./app/app.component.css ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./app/app.component.html":
/*!********************************!*\
  !*** ./app/app.component.html ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<router-outlet></router-outlet>\n"

/***/ }),

/***/ "./app/app.component.ts":
/*!******************************!*\
  !*** ./app/app.component.ts ***!
  \******************************/
/*! exports provided: AppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppComponent", function() { return AppComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};

var AppComponent = /** @class */ (function () {
    function AppComponent() {
        this.title = 'app';
    }
    AppComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-root',
            template: __webpack_require__(/*! ./app.component.html */ "./app/app.component.html"),
            styles: [__webpack_require__(/*! ./app.component.css */ "./app/app.component.css")]
        })
    ], AppComponent);
    return AppComponent;
}());



/***/ }),

/***/ "./app/app.module.ts":
/*!***************************!*\
  !*** ./app/app.module.ts ***!
  \***************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/platform-browser */ "../node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/material */ "../node_modules/@angular/material/esm5/material.es5.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/http */ "../node_modules/@angular/http/fesm5/http.js");
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./app.component */ "./app/app.component.ts");
/* harmony import */ var _register_register_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./register/register.component */ "./app/register/register.component.ts");
/* harmony import */ var _app_routing_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! .//app-routing.module */ "./app/app-routing.module.ts");
/* harmony import */ var _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/platform-browser/animations */ "../node_modules/@angular/platform-browser/fesm5/animations.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/common/http */ "../node_modules/@angular/common/fesm5/http.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @angular/forms */ "../node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _login_login_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./login/login.component */ "./app/login/login.component.ts");
/* harmony import */ var _forgotpwd_forgotpwd_component__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./forgotpwd/forgotpwd.component */ "./app/forgotpwd/forgotpwd.component.ts");
/* harmony import */ var _resetpassword_resetpassword_component__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./resetpassword/resetpassword.component */ "./app/resetpassword/resetpassword.component.ts");
/* harmony import */ var _fundoo_fundoo_component__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./fundoo/fundoo.component */ "./app/fundoo/fundoo.component.ts");
/* harmony import */ var _archive_archive_component__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./archive/archive.component */ "./app/archive/archive.component.ts");
/* harmony import */ var _remainders_remainders_component__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./remainders/remainders.component */ "./app/remainders/remainders.component.ts");
/* harmony import */ var _sidenav_sidenav_component__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./sidenav/sidenav.component */ "./app/sidenav/sidenav.component.ts");
/* harmony import */ var _home_home_component__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./home/home.component */ "./app/home/home.component.ts");
/* harmony import */ var _services_AccountService__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./services/AccountService */ "./app/services/AccountService.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};



















var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            declarations: [
                _app_component__WEBPACK_IMPORTED_MODULE_4__["AppComponent"],
                _register_register_component__WEBPACK_IMPORTED_MODULE_5__["RegisterComponent"],
                _login_login_component__WEBPACK_IMPORTED_MODULE_10__["LoginComponent"],
                _forgotpwd_forgotpwd_component__WEBPACK_IMPORTED_MODULE_11__["ForgotpwdComponent"],
                _resetpassword_resetpassword_component__WEBPACK_IMPORTED_MODULE_12__["ResetpasswordComponent"],
                _fundoo_fundoo_component__WEBPACK_IMPORTED_MODULE_13__["FundooComponent"],
                _archive_archive_component__WEBPACK_IMPORTED_MODULE_14__["ArchiveComponent"],
                _remainders_remainders_component__WEBPACK_IMPORTED_MODULE_15__["RemaindersComponent"],
                _sidenav_sidenav_component__WEBPACK_IMPORTED_MODULE_16__["SidenavComponent"],
                _home_home_component__WEBPACK_IMPORTED_MODULE_17__["HomeComponent"],
            ],
            imports: [
                _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__["BrowserModule"],
                _app_routing_module__WEBPACK_IMPORTED_MODULE_6__["AppRoutingModule"],
                _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_7__["BrowserAnimationsModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatCardModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatInputModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatTabsModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatSelectModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatToolbarModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatButtonModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_9__["FormsModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatFormFieldModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_9__["ReactiveFormsModule"],
                _angular_common_http__WEBPACK_IMPORTED_MODULE_8__["HttpClientModule"],
                _angular_http__WEBPACK_IMPORTED_MODULE_3__["HttpModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatSidenavModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatIconModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatListModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatDividerModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatExpansionModule"]
            ],
            providers: [_services_AccountService__WEBPACK_IMPORTED_MODULE_18__["AccountService"], _angular_common_http__WEBPACK_IMPORTED_MODULE_8__["HttpClientModule"]],
            bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_4__["AppComponent"]]
        })
    ], AppModule);
    return AppModule;
}());



/***/ }),

/***/ "./app/archive/archive.component.css":
/*!*******************************************!*\
  !*** ./app/archive/archive.component.css ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".colour {\r\n  background-color: #607d8b;\r\n}\r\n\r\n.example-sidenav-content {\r\n  display: flex;\r\n  color:white;\r\n}\r\n\r\n.fun {\r\n  font-weight: bold;\r\n  margin-right: 8px;\r\n  font-size: 23px\r\n}\r\n\r\n.example {\r\n  background-color: #e8e8e8;\r\n}\r\n\r\n.example-sidenav {\r\n  background-color: #e8e8e8;\r\n  padding: 20px;\r\n  width: 300px;\r\n}\r\n\r\n.Fundoo2 {\r\n  margin-bottom: 5px;\r\n  margin-left: 40px;\r\n  display: flex;\r\n  color:white;\r\n}\r\n\r\n.searchbar {\r\n  margin-left: 71px;\r\n  width: 761px;\r\n  border-radius: 5px;\r\n  font-size: 20px;\r\n  display: flex;\r\n  background-color: #7a929e;\r\n}\r\n\r\n.search {\r\n  margin-left: 10px;\r\n  width: 250%;\r\n  font-size: 16px;\r\n  background-color: #7a929e;\r\n  padding: 7px 20px 10px 5px;\r\n  border: none;\r\n  outline: none;\r\n}\r\n\r\n.fundoo3 {\r\n  margin-left: 208px;\r\n  \r\n}\r\n\r\n.fundoo31 {\r\n  margin-left: 5px;\r\n  color: white;\r\n}\r\n\r\n.example-sidenav-container {\r\n  position: absolute;\r\n  top: 60px;\r\n  bottom: 0;\r\n  left: 0;\r\n  right: 0;\r\n}\r\n\r\n.imageset {\r\n  display: flex;\r\n  opacity: 0.5;\r\n}\r\n\r\n.fundoo32 {\r\n  margin-left: 50px;\r\n}\r\n\r\n.fundoo33 {\r\n  margin-left: 10px;\r\n  opacity: 0.5;\r\n}\r\n\r\n.sidebutton {\r\n  width: 260px;\r\n  height: 50px;\r\n  margin-left: -8px;\r\n}\r\n\r\n.imageopac {\r\n  opacity: 0.5;\r\n  margin-left: -232px;\r\n}\r\n\r\n.button-r {\r\n  margin-top: -45px;\r\n  margin-left: -94px;\r\n}\r\n\r\n.divider {\r\n  margin: 10px -19px -6px -17px;\r\n}\r\n\r\n.fundoo-card {\r\n  width: 564px;\r\n  margin-top: 37px;\r\n  margin-left: 298px;\r\n}\r\n\r\n.titleinput {\r\n  border: none;\r\n  outline: none;\r\n  font-weight: bold;\r\n  font-size: large;\r\n  margin-bottom: 16px;\r\n}\r\n\r\n.search1 {\r\n  border: none;\r\n  outline: none;\r\n}\r\n\r\n.fundoo-card1 {\r\n  width: 564px;\r\n  margin-top: 37px;\r\n  margin-left: 298px;\r\n  height: 105px;\r\n}\r\n\r\n.fundoo-card-content {\r\n  font-size: small;\r\n  line-height: 2px;\r\n}\r\n\r\n.example-headers-align .mat-expansion-panel-header-title,\r\n.example-headers-align .mat-expansion-panel-header-description {\r\n  flex-basis: 0;\r\n}\r\n\r\n.example-headers-align .mat-expansion-panel-header-description {\r\n  justify-content: space-between;\r\n  align-items: center;\r\n}\r\n\r\n.button-display {\r\n  display: flex;\r\n  margin-left: -15px;\r\n  margin-right: 10px;\r\n}\r\n\r\n#searchid {\r\n  margin-bottom: 17px;\r\n}\r\n\r\n.closebtn {\r\n  margin-left: 96px;\r\n}\r\n"

/***/ }),

/***/ "./app/archive/archive.component.html":
/*!********************************************!*\
  !*** ./app/archive/archive.component.html ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-toolbar class=\"colour\">\r\n  <div class=\"example-sidenav-content\">\r\n    <button mat-icon-button (click)=\"snav.toggle()\">\r\n      <mat-icon>menu</mat-icon>\r\n    </button>\r\n  </div>\r\n  <div class=\"Fundoo2\">\r\n     Archive\r\n  </div>\r\n\r\n  <div class=\"searchbar\">\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-search-24px.svg\" />\r\n    </button>\r\n    <input type=\"search\" class=\"search\" placeholder=\"Search\" />\r\n  </div>\r\n\r\n  <div class=\"fundoo3\">\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-refresh-24px.svg\" />\r\n    </button>\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-view_agenda-24px.svg\" />\r\n    </button>\r\n  </div>\r\n\r\n  <button mat-icon-button class=\"fundoo32\">\r\n    <img src=\"../../assets/image/baseline-apps-24px.svg\"  style=\"color:#ffffff\"/>\r\n  </button>\r\n  <button mat-icon-button class=\"fundoo33\">\r\n    <img src=\"../../assets/image/baseline-notifications-24px.svg\" />\r\n  </button>\r\n\r\n</mat-toolbar><br><br><br>\r\n\r\n\r\n\r\n<div>\r\n  <mat-sidenav-container class=\"example-sidenav-container\">\r\n    <mat-sidenav #snav mode=\"side\" opened class=\"example-sidenav\" style=\"width:260px\">\r\n      <mat-nav-list>\r\n\r\n        <!--<a mat-list-item routerLink=\"/register\" style=\"font-size:small;margin-right:10px\">\r\n          <img src=\"../../assets/image/notes.svg\"/>\r\n          <span>Notes</span>\r\n        </a>-->\r\n\r\n        <button mat-button class=\"sidebutton\" style=\"margin-top:-10px\">\r\n          <a href=\"/fundoo\">\r\n            <img src=\"../../assets/image/notes.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Notes</div>\r\n          </a>\r\n        </button>\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/remainders\">\r\n            <img src=\"../../assets/image/Remainder.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Remainders</div>\r\n          </a>\r\n        </button>\r\n\r\n        <mat-divider class=\"divider\"></mat-divider>\r\n\r\n        <div class=\"imageset\">\r\n          <p style=\"margin-top:25px;font-size:small\">Labels<p>\r\n            <button mat-button style=\"margin-left:100px;font-size:small\">EDIT</button>\r\n        </div>\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/register\">\r\n            <img src=\"../../assets/image/baseline-add-24px.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Create new label</div>\r\n          </a>\r\n        </button>\r\n\r\n        <mat-divider class=\"divider\"></mat-divider>\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/register\">\r\n            <img src=\"../../assets/image/Archieve.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Archive</div>\r\n          </a>\r\n        </button>\r\n\r\n\r\n        <!--<div class=\"imageset\">\r\n          <a mat-list-item routerLink=\"/register\" style=\"font-size:small\">\r\n            <img src=\"../../assets/image/baseline-delete-24px.svg\" />\r\n            <span>Trash</span>\r\n          </a>\r\n        </div>-->\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/register\">\r\n            <img src=\"../../assets/image/baseline-delete-24px.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Trash</div>\r\n          </a>\r\n        </button>\r\n\r\n        <mat-divider class=\"divider\"></mat-divider>\r\n      </mat-nav-list>\r\n    </mat-sidenav>\r\n\r\n    <mat-sidenav-content class=\"example\">\r\n      <mat-card class=\"fundoo-card\">\r\n        <input class=\"search1\" placeholder=\"Take a note....\" />\r\n      </mat-card>\r\n\r\n      <mat-card class=\"fundoo-card1\">\r\n        <input placeholder=\"Title\" class=\"titleinput\">\r\n        <br>\r\n        <input class=\"search1\" id=\"searchid\" placeholder=\"Take a note....\" />\r\n\r\n        <div class=\"button-display\">\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/Remainder.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-person_add-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-color_lens-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-photo-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/Archieve.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-more_vert-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-undo-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-redo-24px.svg\" />\r\n          </button>\r\n\r\n          <button mat-button class=\"closebtn\">CLOSE</button>\r\n        </div>\r\n      </mat-card>\r\n\r\n\r\n    </mat-sidenav-content>\r\n  </mat-sidenav-container>\r\n</div>\r\n\r\n\r\n\r\n"

/***/ }),

/***/ "./app/archive/archive.component.ts":
/*!******************************************!*\
  !*** ./app/archive/archive.component.ts ***!
  \******************************************/
/*! exports provided: ArchiveComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ArchiveComponent", function() { return ArchiveComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ArchiveComponent = /** @class */ (function () {
    function ArchiveComponent() {
    }
    ArchiveComponent.prototype.ngOnInit = function () {
    };
    ArchiveComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-archive',
            template: __webpack_require__(/*! ./archive.component.html */ "./app/archive/archive.component.html"),
            styles: [__webpack_require__(/*! ./archive.component.css */ "./app/archive/archive.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ArchiveComponent);
    return ArchiveComponent;
}());



/***/ }),

/***/ "./app/constant/constants.services.ts":
/*!********************************************!*\
  !*** ./app/constant/constants.services.ts ***!
  \********************************************/
/*! exports provided: servicesusrls */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "servicesusrls", function() { return servicesusrls; });
var servicesusrls = {
    host: "https://localhost:44387/",
    register: 'api/Account/Register',
    forgotpass: 'api/Account/ForgotPassword',
    login: 'api/Account/Login',
    resetpass: 'api/Account/ResetPassword'
};


/***/ }),

/***/ "./app/forgotpwd/forgotpwd.component.css":
/*!***********************************************!*\
  !*** ./app/forgotpwd/forgotpwd.component.css ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".forpass-card {\r\n  max-width: 400px;\r\n  margin: auto;\r\n}\r\n\r\n.forpass-container {\r\n  display: flex;\r\n  flex-direction: column;\r\n}\r\n"

/***/ }),

/***/ "./app/forgotpwd/forgotpwd.component.html":
/*!************************************************!*\
  !*** ./app/forgotpwd/forgotpwd.component.html ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-toolbar color=\"primary\">\r\n  <span>Fundoo Notes</span>\r\n</mat-toolbar><br><br><br><br><br>\r\n<mat-card class=\"forpass-card\">\r\n  <mat-card-title align=\"center\">\r\n    Forgot Password ?\r\n  </mat-card-title>\r\n  <br>\r\n  <br>\r\n\r\n  <mat-card-content>\r\n    <div class=\"forpass-container\">\r\n      <mat-form-field>\r\n        <input matInput placeholder=\"Email-id\" required [formControl]=\"emailFormControl\" [(ngModel)]=\"model.email\">\r\n        <mat-error *ngIf=\"emailFormControl.hasError('required')\">\r\n          User Name is required\r\n        </mat-error>\r\n        <mat-error *ngIf=\"emailFormControl.hasError('pattern')\">\r\n          User Name is invalid\r\n        </mat-error>\r\n      </mat-form-field>\r\n      <br>\r\n      <br>\r\n\r\n      <button mat-raised-button color=\"primary\" type=\"submit\" (click)=\"onSubmit() \" >Reset</button>\r\n      <br><br>\r\n    </div>\r\n  </mat-card-content>\r\n</mat-card>\r\n"

/***/ }),

/***/ "./app/forgotpwd/forgotpwd.component.ts":
/*!**********************************************!*\
  !*** ./app/forgotpwd/forgotpwd.component.ts ***!
  \**********************************************/
/*! exports provided: ForgotpwdComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ForgotpwdComponent", function() { return ForgotpwdComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/forms */ "../node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _services_AccountService__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../services/AccountService */ "./app/services/AccountService.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var ForgotpwdComponent = /** @class */ (function () {
    function ForgotpwdComponent(service) {
        this.service = service;
        this.model = {};
        this.emailFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
        ]);
    }
    ForgotpwdComponent.prototype.ngOnInit = function () {
    };
    ForgotpwdComponent.prototype.onSubmit = function () {
        this.service.ForgotData(this.model).subscribe(function (res) {
            console.log("Demo", res);
        });
    };
    ForgotpwdComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-forgotpwd',
            template: __webpack_require__(/*! ./forgotpwd.component.html */ "./app/forgotpwd/forgotpwd.component.html"),
            styles: [__webpack_require__(/*! ./forgotpwd.component.css */ "./app/forgotpwd/forgotpwd.component.css")],
            providers: [_services_AccountService__WEBPACK_IMPORTED_MODULE_2__["AccountService"]]
        }),
        __metadata("design:paramtypes", [_services_AccountService__WEBPACK_IMPORTED_MODULE_2__["AccountService"]])
    ], ForgotpwdComponent);
    return ForgotpwdComponent;
}());



/***/ }),

/***/ "./app/fundoo/fundoo.component.css":
/*!*****************************************!*\
  !*** ./app/fundoo/fundoo.component.css ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".colour {\r\n  background-color: #ffbb00;\r\n}\r\n\r\n.example-sidenav-content {\r\n  opacity: 0.5;\r\n  display: flex;\r\n}\r\n\r\n.Fundoo2 {\r\n  margin-bottom: 5px;\r\n  margin-left: 40px;\r\n}\r\n\r\n.searchbar {\r\n  margin-left: 40px;\r\n  width: 700px;\r\n  border-radius: 5px;\r\n  font-size: 20px;\r\n  display: flex;\r\n  background-color: #f5b400;\r\n}\r\n\r\n.search {\r\n  margin-left: 10px;\r\n  width: 250%;\r\n  font-size: 16px;\r\n  background-color: #f5b400;\r\n  padding: 7px 20px 10px 5px;\r\n  border: none;\r\n  outline: none;\r\n}\r\n\r\n.fundoo3 {\r\n  margin-left: 101px;\r\n}\r\n\r\n.fundoo31 {\r\n  margin-left: 5px;\r\n  opacity: 0.5;\r\n}\r\n\r\n.fundoo32 {\r\n  margin-left: 50px;\r\n  opacity: 0.5;\r\n}\r\n\r\n.fundoo33 {\r\n  margin-left: 10px;\r\n  opacity: 0.5;\r\n}\r\n\r\n.example-sidenav {\r\n  background-color: #e8e8e8;\r\n  padding: 20px;\r\n  width: 300px;\r\n}\r\n\r\n.example-sidenav-container {\r\n  position: absolute;\r\n  top: 60px;\r\n  bottom: 0;\r\n  left: 0;\r\n  right: 0;\r\n}\r\n\r\n.sidebutton {\r\n  width: 260px;\r\n  height: 50px;\r\n  margin-left: -8px;\r\n}\r\n\r\n.imageopac {\r\n  opacity: 0.5;\r\n  margin-left: -232px;\r\n}\r\n\r\n.button-r {\r\n  margin-top: -45px;\r\n  margin-left: -94px;\r\n}\r\n\r\n.divider {\r\n  margin: 10px -19px -6px -17px;\r\n}\r\n\r\n.imageset {\r\n  display: flex;\r\n  opacity: 0.5;\r\n}\r\n"

/***/ }),

/***/ "./app/fundoo/fundoo.component.html":
/*!******************************************!*\
  !*** ./app/fundoo/fundoo.component.html ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-toolbar class=\"colour\">\r\n  <div class=\"example-sidenav-content\">\r\n    <button mat-icon-button (click)=\"snav.toggle()\">\r\n      <mat-icon>menu</mat-icon>\r\n    </button>\r\n  </div>\r\n  <div class=\"Fundoo2\">\r\n    <strong>Fundoo </strong> Notes\r\n  </div>\r\n\r\n  <div class=\"searchbar\">\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-search-24px.svg\" />\r\n    </button>\r\n    <input type=\"search\" class=\"search\" placeholder=\"Search\" />\r\n  </div>\r\n\r\n  <div class=\"fundoo3\">\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-refresh-24px.svg\" />\r\n    </button>\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-view_agenda-24px.svg\" />\r\n    </button>\r\n  </div>\r\n\r\n  <button mat-icon-button class=\"fundoo32\">\r\n    <img src=\"../../assets/image/baseline-apps-24px.svg\" />\r\n  </button>\r\n  <button mat-icon-button class=\"fundoo33\">\r\n    <img src=\"../../assets/image/baseline-notifications-24px.svg\" />\r\n  </button>\r\n\r\n</mat-toolbar><br><br><br>\r\n\r\n<mat-sidenav-container class=\"example-sidenav-container\">\r\n  <mat-sidenav #snav mode=\"side\" opened class=\"example-sidenav\" style=\"width:260px\">\r\n    <mat-nav-list>\r\n\r\n      <!--<a mat-list-item routerLink=\"/register\" style=\"font-size:small;margin-right:10px\">\r\n        <img src=\"../../assets/image/notes.svg\"/>\r\n        <span>Notes</span>\r\n      </a>-->\r\n\r\n      <button mat-button class=\"sidebutton\" style=\"margin-top:-10px\">\r\n        <a href=\"/sidenav\">\r\n          <img src=\"../../assets/image/notes.svg\" class=\"imageopac\" />\r\n          <div class=\"button-r\">Notes</div>\r\n        </a>\r\n      </button>\r\n\r\n      <button mat-button class=\"sidebutton\">\r\n        <a href=\"/remainders\">\r\n          <img src=\"../../assets/image/Remainder.svg\" class=\"imageopac\" />\r\n          <div class=\"button-r\">Remainders</div>\r\n        </a>\r\n      </button>\r\n\r\n      <mat-divider class=\"divider\"></mat-divider>\r\n\r\n      <div class=\"imageset\">\r\n        <p style=\"margin-top:25px;font-size:small\">Labels<p>\r\n          <button mat-button style=\"margin-left:100px;font-size:small\">EDIT</button>\r\n      </div>\r\n\r\n      <button mat-button class=\"sidebutton\">\r\n        <a href=\"/register\">\r\n          <img src=\"../../assets/image/baseline-add-24px.svg\" class=\"imageopac\" />\r\n          <div class=\"button-r\">Create new label</div>\r\n        </a>\r\n      </button>\r\n\r\n      <mat-divider class=\"divider\"></mat-divider>\r\n\r\n      <button mat-button class=\"sidebutton\">\r\n        <a href=\"/archive\">\r\n          <img src=\"../../assets/image/Archieve.svg\" class=\"imageopac\" />\r\n          <div class=\"button-r\">Archive</div>\r\n        </a>\r\n      </button>\r\n\r\n\r\n      <!--<div class=\"imageset\">\r\n        <a mat-list-item routerLink=\"/register\" style=\"font-size:small\">\r\n          <img src=\"../../assets/image/baseline-delete-24px.svg\" />\r\n          <span>Trash</span>\r\n        </a>\r\n      </div>-->\r\n\r\n      <button mat-button class=\"sidebutton\">\r\n        <a href=\"/register\">\r\n          <img src=\"../../assets/image/baseline-delete-24px.svg\" class=\"imageopac\" />\r\n          <div class=\"button-r\">Trash</div>\r\n        </a>\r\n      </button>\r\n      <mat-divider class=\"divider\"></mat-divider>\r\n    </mat-nav-list>\r\n  </mat-sidenav>\r\n  <router-outlet></router-outlet>\r\n</mat-sidenav-container>\r\n"

/***/ }),

/***/ "./app/fundoo/fundoo.component.ts":
/*!****************************************!*\
  !*** ./app/fundoo/fundoo.component.ts ***!
  \****************************************/
/*! exports provided: FundooComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FundooComponent", function() { return FundooComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _services_notes_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../services/notes.service */ "./app/services/notes.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var FundooComponent = /** @class */ (function () {
    function FundooComponent(service) {
        this.service = service;
        this.model = {};
        this.mainCard = true;
        this.createCard = false;
    }
    FundooComponent.prototype.ngOnInit = function () {
    };
    FundooComponent.prototype.showHideMain = function () {
        this.mainCard = false;
        this.createCard = true;
    };
    FundooComponent.prototype.showHideImp = function () {
        this.mainCard = true;
        this.createCard = false;
        this.service.Notes(this.model).subscribe(function (res) {
            console.log("Hello", res);
        });
    };
    FundooComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-fundoo',
            template: __webpack_require__(/*! ./fundoo.component.html */ "./app/fundoo/fundoo.component.html"),
            styles: [__webpack_require__(/*! ./fundoo.component.css */ "./app/fundoo/fundoo.component.css")]
        }),
        __metadata("design:paramtypes", [_services_notes_service__WEBPACK_IMPORTED_MODULE_1__["NotesService"]])
    ], FundooComponent);
    return FundooComponent;
}());



/***/ }),

/***/ "./app/home/home.component.css":
/*!*************************************!*\
  !*** ./app/home/home.component.css ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./app/home/home.component.html":
/*!**************************************!*\
  !*** ./app/home/home.component.html ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<p>\n  home works!\n</p>\n"

/***/ }),

/***/ "./app/home/home.component.ts":
/*!************************************!*\
  !*** ./app/home/home.component.ts ***!
  \************************************/
/*! exports provided: HomeComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HomeComponent", function() { return HomeComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var HomeComponent = /** @class */ (function () {
    function HomeComponent() {
    }
    HomeComponent.prototype.ngOnInit = function () {
    };
    HomeComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-home',
            template: __webpack_require__(/*! ./home.component.html */ "./app/home/home.component.html"),
            styles: [__webpack_require__(/*! ./home.component.css */ "./app/home/home.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], HomeComponent);
    return HomeComponent;
}());



/***/ }),

/***/ "./app/login/login.component.css":
/*!***************************************!*\
  !*** ./app/login/login.component.css ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".login-card {\r\n  max-width: 400px;\r\n  margin: auto;\r\n}\r\n\r\n.login-container {\r\n  display: flex;\r\n  flex-direction: column;\r\n}\r\n\r\n.button-r {\r\n  display: flex;\r\n}\r\n\r\n.button-r1 {\r\n  flex: 1;\r\n  margin-right: 30px;\r\n}\r\n\r\n.button-r1:last-child {\r\n    margin-right: 0;\r\n  }\r\n\r\n.dec {\r\n  text-decoration: none;\r\n}\r\n\r\n.credential{\r\n  margin-top:-50px;\r\n  color:red;\r\n}\r\n"

/***/ }),

/***/ "./app/login/login.component.html":
/*!****************************************!*\
  !*** ./app/login/login.component.html ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-toolbar color=\"primary\">\r\n  <span>Fundoo Notes</span>\r\n</mat-toolbar><br><br><br>\r\n<mat-card class=\"login-card\">\r\n  <mat-card-title align=\"center\">\r\n    SIGN IN\r\n  </mat-card-title>\r\n  <br>\r\n <mat-card-content>\r\n   <div class=\"login-container\">\r\n     <mat-form-field>\r\n       <input matInput placeholder=\"User Name\" required [formControl]=\"Emailform\" [(ngModel)]=\"model.name\">\r\n       <mat-error *ngIf=\"Emailform.hasError('pattern')\">\r\n         User Name is invalid\r\n       </mat-error>\r\n       <mat-error *ngIf=\"Emailform.hasError('required')\">\r\n         User Name is required\r\n       </mat-error>\r\n     </mat-form-field>\r\n     <mat-form-field>\r\n       <input matInput placeholder=\"Password\" type=\"password\" required [formControl]=\"Passwordform\" [(ngModel)]=\"model.pass\">\r\n       <mat-error *ngIf=\"Passwordform.hasError('required')\">\r\n         PassWord is required\r\n       </mat-error>\r\n     </mat-form-field><br><br>\r\n     <div *ngIf=\"showError\" class=\"credential\">\r\n       Entered credential is incorrect\r\n     </div>\r\n\r\n     <div class=\"button-r\">\r\n       <button mat-button class=\"button-r1\" color=\"primary\"><a class=\"dec\" href=\"/forgotpwd\">Forgot Password?</a></button>\r\n       <button mat-button class=\"button-r1\" color=\"primary\">Send & VerifyOTP</button>\r\n     </div><br><br>\r\n     <div class=\"button-r\">\r\n       <button mat-button class=\"button-r1\" color=\"primary\"><a class=\"dec\" href=\"/register\">Create Account</a></button>\r\n       <button mat-raised-button class=\"button-r1\" color=\"primary\" type=\"submit\" (click)=\"OnSubmit()\">Sign In</button>\r\n     </div>\r\n     <br><br>\r\n   </div>\r\n  </mat-card-content>\r\n</mat-card>\r\n"

/***/ }),

/***/ "./app/login/login.component.ts":
/*!**************************************!*\
  !*** ./app/login/login.component.ts ***!
  \**************************************/
/*! exports provided: LoginComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LoginComponent", function() { return LoginComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/forms */ "../node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _services_AccountService__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../services/AccountService */ "./app/services/AccountService.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var LoginComponent = /** @class */ (function () {
    function LoginComponent(service) {
        this.service = service;
        this.model = {};
        this.Emailform = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
        ]);
        this.Passwordform = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.showError = false;
    }
    LoginComponent.prototype.ngOnInit = function () {
    };
    LoginComponent.prototype.OnSubmit = function () {
        var _this = this;
        this.service.LoginData(this.model).subscribe(function (data) {
            debugger;
            console.log(data.status);
            _this.flag = data.status;
            if (_this.flag == 0) {
                _this.showError = true;
            }
        });
    };
    LoginComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-login',
            template: __webpack_require__(/*! ./login.component.html */ "./app/login/login.component.html"),
            styles: [__webpack_require__(/*! ./login.component.css */ "./app/login/login.component.css")]
        }),
        __metadata("design:paramtypes", [_services_AccountService__WEBPACK_IMPORTED_MODULE_2__["AccountService"]])
    ], LoginComponent);
    return LoginComponent;
}());



/***/ }),

/***/ "./app/register/register.component.css":
/*!*********************************************!*\
  !*** ./app/register/register.component.css ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".register-card {\r\n  max-width: 485px;\r\n  margin: auto;\r\n}\r\n\r\n.button-row {\r\n  display: flex;\r\n}\r\n\r\n.button-row1 {\r\n  flex: 1;\r\n  margin-right: 30px;\r\n}\r\n\r\n.button-row1:last-child {\r\n    margin-right: 0;\r\n  }\r\n\r\n#exflex {\r\n  display: flex;\r\n}\r\n\r\n#exflex1 {\r\n  flex: 1;\r\n  margin-right: 40px;\r\n}\r\n\r\n#exflex1:last-child {\r\n    margin-right: 0;\r\n  }\r\n\r\n.personal-container {\r\n  display: flex;\r\n  flex-direction: column;\r\n}\r\n\r\n#mobright {\r\n  align-content: flex-end\r\n}\r\n\r\n#f1 {\r\n  margin-top: auto;\r\n}\r\n\r\n#txtclr {\r\n  color: red;\r\n}\r\n\r\n.credential {\r\n  margin-top: -50px;\r\n  color: red;\r\n}\r\n"

/***/ }),

/***/ "./app/register/register.component.html":
/*!**********************************************!*\
  !*** ./app/register/register.component.html ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-toolbar color=\"primary\">\r\n  <span>Fundoo Notes</span>\r\n</mat-toolbar><br><br><br>\r\n\r\n<div>\r\n  <mat-card class=\"register-card\">\r\n    <mat-card-title align=\"center\">\r\n      REGISTER\r\n    </mat-card-title>\r\n    <form>\r\n      <mat-tab-group [selectedIndex]=\"selectedIndex\">\r\n        <mat-tab label=\"PERSONNAL\">\r\n          <br>\r\n          <div class=\"personal-container\">\r\n            <mat-form-field>\r\n              <input matInput placeholder=\"First Name\" required [formControl]=\"fnameFormControl\" [(ngModel)]=\"model.fname\">\r\n              <mat-error *ngIf=\"fnameFormControl.hasError('required')\">\r\n                firstname is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <mat-form-field>\r\n              <input type=\"text\" matInput placeholder=\"Last Name\" required [formControl]=\"lnameFormControl\" [(ngModel)]=\"model.lname\">\r\n              <mat-error *ngIf=\"lnameFormControl.hasError('required')\">\r\n                lastname is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <div id=\"exflex\">\r\n            <mat-form-field id=\"exflex1\">\r\n                <mat-select placeholder=\"Gender\" required [formControl]=\"genderFormControl\" [(ngModel)]=\"model.gender1\">\r\n                  <mat-option *ngFor=\"let pow of gender\" [value]=\"pow\">{{pow.value}}</mat-option>\r\n                </mat-select>\r\n                <mat-error *ngIf=\"lnameFormControl.hasError('required')\">\r\n                  gender is required\r\n                </mat-error>\r\n            </mat-form-field>\r\n            </div>\r\n            <mat-form-field hintlabel=\"####-####-####\" textcolor=\"black\">\r\n              <input matInput maxlength=\"14\" placeholder=\"Aadhar Number\" required [formControl]=\"aadharFormControl\" [(ngModel)]=\"model.aadhar\">\r\n              <mat-error *ngIf=\"aadharFormControl.hasError('required')\">\r\n                aadhar number is required\r\n              </mat-error>\r\n              <mat-error *ngIf=\"aadharFormControl.hasError('pattern')\">\r\n                aadhar number pattern is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <div id=\"exflex\">\r\n              <mat-form-field id=\"exflex1\">\r\n                <mat-select placeholder=\"Country Code\" required>\r\n                  <mat-option *ngFor=\"let pow of postal \" [value]=\"pow\">{{pow.Code}}</mat-option>\r\n                </mat-select>\r\n              </mat-form-field>\r\n              <mat-form-field id=\"exflex1\">\r\n                <input matInput placeholder=\"Phone Number\" required [formControl]=\"phoneFormControl\" [(ngModel)]=\"model.phone\">\r\n                <mat-error *ngIf=\"phoneFormControl.hasError('required')\">\r\n                  phone number is required\r\n                </mat-error>\r\n                <mat-error *ngIf=\"phoneFormControl.hasError('pattern')\">\r\n                  phone number is invalid\r\n                </mat-error>\r\n              </mat-form-field>\r\n            </div>\r\n            <br>\r\n            <br>\r\n            <button mat-raised-button color=\"primary\" (click)=\"selectTab(1)\">Next</button>\r\n          </div>\r\n        </mat-tab>\r\n\r\n\r\n        <mat-tab label=\"ADDRESS\">\r\n          <br>\r\n          <div class=\"personal-container\">\r\n            <mat-form-field>\r\n              <input matInput placeholder=\"Address\" [formControl]=\"addressFormControl\" [(ngModel)]=\"model.address\" />\r\n              <mat-error *ngIf=\"addressFormControl.hasError('required')\">\r\n                address is required\r\n              </mat-error>\r\n              <mat-error *ngIf=\"addressFormControl.hasError('maxlength')\">\r\n                address is exceeding\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <mat-form-field>\r\n              <input matInput placeholder=\"line 2\">\r\n            </mat-form-field>\r\n            <mat-form-field>\r\n              <mat-select placeholder=\"State\" required [formControl]=\"stateFormControl\" [(ngModel)]=\"model.state1\">\r\n                <mat-option *ngFor=\"let pow of state\" [value]=\"pow\">{{pow.name}}</mat-option>\r\n              </mat-select>\r\n              <mat-error *ngIf=\"stateFormControl.hasError('required')\">\r\n                state is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <mat-form-field>\r\n              <input matInput placeholder=\"City\" [formControl]=\"cityFormControl\" [(ngModel)]=\"model.city\" />\r\n              <mat-error *ngIf=\"cityFormControl.hasError('required')\">\r\n                city is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <mat-form-field>\r\n              <input matInput placeholder=\"Postal Code\" [formControl]=\"zipFormControl\" [(ngModel)]=\"model.zip\" />\r\n              <mat-error *ngIf=\"zipFormControl.hasError('required')\">\r\n                zip code is required\r\n              </mat-error>\r\n              <mat-error *ngIf=\"zipFormControl.hasError('pattern')\">\r\n                zip pattern is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <div class=\"button-row\">\r\n              <br><br>\r\n              <button mat-raised-button class=\"button-row1\" (click)=\"selectTab(0)\">Back</button>\r\n              <button mat-raised-button color=\"primary\" class=\"button-row1\" (click)=\"selectTab(2)\" >Next</button>\r\n            </div>\r\n          </div>\r\n        </mat-tab>\r\n\r\n\r\n        <mat-tab label=\"SECURITY\">\r\n          <br>\r\n          <div class=\"personal-container\">\r\n            <mat-form-field>\r\n              <input matInput placeholder=\"Email Id\" [formControl]=\"userFormControl\" [(ngModel)]=\"model.email\">\r\n              <mat-error *ngIf=\"userFormControl.hasError('required')\">\r\n                User Name is required\r\n              </mat-error>\r\n              <mat-error *ngIf=\"userFormControl.hasError('pattern')\">\r\n                User Name is invalid\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <mat-form-field>\r\n              <input matInput type=\"password\" ng-model=\"password1\" name=\"password1\" placeholder=\"Password\" [formControl]=\"passFormControl\" [(ngModel)]=\"model.password\">\r\n              <mat-error *ngIf=\"passFormControl.hasError('required')\">\r\n                Password is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <mat-form-field>\r\n              <input matInput type=\"password\" placeholder=\"Confirm Password\" required [formControl]=\"confmFormControl\" [(ngModel)]=\"model.cpassword\" >\r\n              <mat-error *ngIf=\"confmFormControl.hasError('required')\">\r\n                Confirm Password is required\r\n              </mat-error>\r\n            </mat-form-field>\r\n            <div *ngIf=\"showError\" class=\"credential\">\r\n              Entered credential is incorrect\r\n            </div>\r\n          </div>\r\n          <br><br><br>\r\n          <div class=\"button-row\">\r\n            <br><br>\r\n            <button mat-raised-button class=\"button-row1\" (click)=\"selectTab(1)\">Back</button>\r\n            <button mat-raised-button color=\"primary\" class=\"button-row1\" type=\"submit\" (click)=\"onSubmit()\">Register</button>\r\n          </div>\r\n        </mat-tab>\r\n\r\n      </mat-tab-group>\r\n    </form>\r\n  </mat-card>\r\n</div>\r\n"

/***/ }),

/***/ "./app/register/register.component.ts":
/*!********************************************!*\
  !*** ./app/register/register.component.ts ***!
  \********************************************/
/*! exports provided: RegisterComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "RegisterComponent", function() { return RegisterComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/forms */ "../node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _services_AccountService__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../services/AccountService */ "./app/services/AccountService.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




//import { Http, Response, RequestOptions, Headers } from '@angular/http';
var RegisterComponent = /** @class */ (function () {
    function RegisterComponent(service, fb) {
        var _this = this;
        this.service = service;
        this.fb = fb;
        this.model = {};
        this.selectedIndex = 0;
        this.fnameFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].minLength(4),
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].maxLength(128)
        ]);
        this.lnameFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.genderFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.aadharFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].pattern("[0-9]{4}-[0-9]{4}-[0-9]{4}")
        ]);
        this.phoneFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].pattern("[0-9]{10}")
        ]);
        this.addressFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].maxLength(20)
        ]);
        this.stateFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.cityFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.zipFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].pattern("[0-9]{6}")
        ]);
        this.userFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
        ]);
        this.passFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.confmFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.showError = false;
        this.pass = this.model.password;
        this.cpass = this.model.cpassword;
        this.service.getCountryList()
            .subscribe(function (res) {
            _this.postal = res;
        });
        this.service.getGender()
            .subscribe(function (res) {
            _this.gender = res;
        });
        this.service.getstate()
            .subscribe(function (res) {
            _this.state = res;
        });
    }
    RegisterComponent.prototype.ngOnInit = function () {
    };
    RegisterComponent.prototype.selectTab = function (index) {
        this.selectedIndex = index;
    };
    RegisterComponent.prototype.validate = function () {
        if (this.pass != this.cpass) {
            this.showError = true;
        }
    };
    RegisterComponent.prototype.onSubmit = function () {
        if (this.pass != this.cpass) {
            this.showError = true;
        }
        this.service.Register(this.model).subscribe(function (res) {
            console.log("Demo", res);
        });
    };
    RegisterComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-register',
            template: __webpack_require__(/*! ./register.component.html */ "./app/register/register.component.html"),
            styles: [__webpack_require__(/*! ./register.component.css */ "./app/register/register.component.css")],
            providers: [_services_AccountService__WEBPACK_IMPORTED_MODULE_2__["AccountService"]]
        }),
        __metadata("design:paramtypes", [_services_AccountService__WEBPACK_IMPORTED_MODULE_2__["AccountService"], _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormBuilder"]])
    ], RegisterComponent);
    return RegisterComponent;
}());



/***/ }),

/***/ "./app/remainders/remainders.component.css":
/*!*************************************************!*\
  !*** ./app/remainders/remainders.component.css ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".colour {\r\n  background-color: #607d8b;\r\n}\r\n\r\n.example-sidenav-content {\r\n  display: flex;\r\n  color: white;\r\n}\r\n\r\n.fun {\r\n  font-weight: bold;\r\n  margin-right: 8px;\r\n  font-size: 23px\r\n}\r\n\r\n.example {\r\n  background-color: #e8e8e8;\r\n}\r\n\r\n.example-sidenav {\r\n  background-color: #e8e8e8;\r\n  padding: 20px;\r\n  width: 300px;\r\n}\r\n\r\n.Fundoo2 {\r\n  margin-bottom: 5px;\r\n  margin-left: 40px;\r\n  display: flex;\r\n  color: white;\r\n}\r\n\r\n.searchbar {\r\n  margin-left: 71px;\r\n  width: 761px;\r\n  border-radius: 5px;\r\n  font-size: 20px;\r\n  display: flex;\r\n  background-color: #7a929e;\r\n}\r\n\r\n.search {\r\n  margin-left: 10px;\r\n  width: 250%;\r\n  font-size: 16px;\r\n  background-color: #7a929e;\r\n  padding: 7px 20px 10px 5px;\r\n  border: none;\r\n  outline: none;\r\n}\r\n\r\n.fundoo3 {\r\n  margin-left: 208px;\r\n}\r\n\r\n.fundoo31 {\r\n  margin-left: 5px;\r\n  color: white;\r\n}\r\n\r\n.example-sidenav-container {\r\n  position: absolute;\r\n  top: 60px;\r\n  bottom: 0;\r\n  left: 0;\r\n  right: 0;\r\n}\r\n\r\n.imageset {\r\n  display: flex;\r\n  opacity: 0.5;\r\n}\r\n\r\n.fundoo32 {\r\n  margin-left: 50px;\r\n}\r\n\r\n.fundoo33 {\r\n  margin-left: 10px;\r\n  opacity: 0.5;\r\n}\r\n\r\n.sidebutton {\r\n  width: 260px;\r\n  height: 50px;\r\n  margin-left: -8px;\r\n}\r\n\r\n.imageopac {\r\n  opacity: 0.5;\r\n  margin-left: -232px;\r\n}\r\n\r\n.button-r {\r\n  margin-top: -45px;\r\n  margin-left: -94px;\r\n}\r\n\r\n.divider {\r\n  margin: 10px -19px -6px -17px;\r\n}\r\n\r\n.fundoo-card {\r\n  width: 564px;\r\n  margin-top: 37px;\r\n  margin-left: 298px;\r\n}\r\n\r\n.titleinput {\r\n  border: none;\r\n  outline: none;\r\n  font-weight: bold;\r\n  font-size: large;\r\n  margin-bottom: 16px;\r\n}\r\n\r\n.search1 {\r\n  border: none;\r\n  outline: none;\r\n}\r\n\r\n.fundoo-card1 {\r\n  width: 564px;\r\n  margin-top: 37px;\r\n  margin-left: 298px;\r\n  height: 105px;\r\n}\r\n\r\n.fundoo-card-content {\r\n  font-size: small;\r\n  line-height: 2px;\r\n}\r\n\r\n.example-headers-align .mat-expansion-panel-header-title,\r\n.example-headers-align .mat-expansion-panel-header-description {\r\n  flex-basis: 0;\r\n}\r\n\r\n.example-headers-align .mat-expansion-panel-header-description {\r\n  justify-content: space-between;\r\n  align-items: center;\r\n}\r\n\r\n.button-display {\r\n  display: flex;\r\n  margin-left: -15px;\r\n  margin-right: 10px;\r\n}\r\n\r\n#searchid {\r\n  margin-bottom: 17px;\r\n}\r\n\r\n.closebtn {\r\n  margin-left: 96px;\r\n}\r\n"

/***/ }),

/***/ "./app/remainders/remainders.component.html":
/*!**************************************************!*\
  !*** ./app/remainders/remainders.component.html ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-toolbar class=\"colour\">\r\n  <div class=\"example-sidenav-content\">\r\n    <button mat-icon-button (click)=\"snav.toggle()\">\r\n      <mat-icon>menu</mat-icon>\r\n    </button>\r\n  </div>\r\n  <div class=\"Fundoo2\">\r\n    Remainders\r\n  </div>\r\n\r\n  <div class=\"searchbar\">\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-search-24px.svg\" />\r\n    </button>\r\n    <input type=\"search\" class=\"search\" placeholder=\"Search\" />\r\n  </div>\r\n\r\n  <div class=\"fundoo3\">\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-refresh-24px.svg\" />\r\n    </button>\r\n    <button mat-icon-button class=\"fundoo31\">\r\n      <img src=\"../../assets/image/baseline-view_agenda-24px.svg\" />\r\n    </button>\r\n  </div>\r\n\r\n  <button mat-icon-button class=\"fundoo32\">\r\n    <img src=\"../../assets/image/baseline-apps-24px.svg\" style=\"color:#ffffff\" />\r\n  </button>\r\n  <button mat-icon-button class=\"fundoo33\">\r\n    <img src=\"../../assets/image/baseline-notifications-24px.svg\" />\r\n  </button>\r\n\r\n</mat-toolbar><br><br><br>\r\n\r\n\r\n\r\n<div>\r\n  <mat-sidenav-container class=\"example-sidenav-container\">\r\n    <mat-sidenav #snav mode=\"side\" opened class=\"example-sidenav\" style=\"width:260px\">\r\n      <mat-nav-list>\r\n\r\n        <!--<a mat-list-item routerLink=\"/register\" style=\"font-size:small;margin-right:10px\">\r\n          <img src=\"../../assets/image/notes.svg\"/>\r\n          <span>Notes</span>\r\n        </a>-->\r\n\r\n        <button mat-button class=\"sidebutton\" style=\"margin-top:-10px\">\r\n          <a href=\"/fundoo\">\r\n            <img src=\"../../assets/image/notes.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Notes</div>\r\n          </a>\r\n        </button>\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/register\">\r\n            <img src=\"../../assets/image/Remainder.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Remainders</div>\r\n          </a>\r\n        </button>\r\n\r\n        <mat-divider class=\"divider\"></mat-divider>\r\n\r\n        <div class=\"imageset\">\r\n          <p style=\"margin-top:25px;font-size:small\">Labels<p>\r\n            <button mat-button style=\"margin-left:100px;font-size:small\">EDIT</button>\r\n        </div>\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/register\">\r\n            <img src=\"../../assets/image/baseline-add-24px.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Create new label</div>\r\n          </a>\r\n        </button>\r\n\r\n        <mat-divider class=\"divider\"></mat-divider>\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/archive\">\r\n            <img src=\"../../assets/image/Archieve.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Archive</div>\r\n          </a>\r\n        </button>\r\n\r\n\r\n        <!--<div class=\"imageset\">\r\n          <a mat-list-item routerLink=\"/register\" style=\"font-size:small\">\r\n            <img src=\"../../assets/image/baseline-delete-24px.svg\" />\r\n            <span>Trash</span>\r\n          </a>\r\n        </div>-->\r\n\r\n        <button mat-button class=\"sidebutton\">\r\n          <a href=\"/register\">\r\n            <img src=\"../../assets/image/baseline-delete-24px.svg\" class=\"imageopac\" />\r\n            <div class=\"button-r\">Trash</div>\r\n          </a>\r\n        </button>\r\n\r\n        <mat-divider class=\"divider\"></mat-divider>\r\n      </mat-nav-list>\r\n    </mat-sidenav>\r\n\r\n    <mat-sidenav-content class=\"example\">\r\n      <mat-card class=\"fundoo-card\">\r\n        <input class=\"search1\" placeholder=\"Take a note....\" />\r\n      </mat-card>\r\n\r\n      <mat-card class=\"fundoo-card1\">\r\n        <input placeholder=\"Title\" class=\"titleinput\">\r\n        <br>\r\n        <input class=\"search1\" id=\"searchid\" placeholder=\"Take a note....\" />\r\n\r\n        <div class=\"button-display\">\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/Remainder.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-person_add-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-color_lens-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-photo-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/Archieve.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-more_vert-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-undo-24px.svg\" />\r\n          </button>\r\n          <button mat-icon-button class=\"fundoo33\">\r\n            <img src=\"../../assets/image/baseline-redo-24px.svg\" />\r\n          </button>\r\n\r\n          <button mat-button class=\"closebtn\">CLOSE</button>\r\n        </div>\r\n      </mat-card>\r\n\r\n\r\n    </mat-sidenav-content>\r\n  </mat-sidenav-container>\r\n</div>\r\n\r\n\r\n\r\n"

/***/ }),

/***/ "./app/remainders/remainders.component.ts":
/*!************************************************!*\
  !*** ./app/remainders/remainders.component.ts ***!
  \************************************************/
/*! exports provided: RemaindersComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "RemaindersComponent", function() { return RemaindersComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var RemaindersComponent = /** @class */ (function () {
    function RemaindersComponent() {
    }
    RemaindersComponent.prototype.ngOnInit = function () {
    };
    RemaindersComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-remainders',
            template: __webpack_require__(/*! ./remainders.component.html */ "./app/remainders/remainders.component.html"),
            styles: [__webpack_require__(/*! ./remainders.component.css */ "./app/remainders/remainders.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], RemaindersComponent);
    return RemaindersComponent;
}());



/***/ }),

/***/ "./app/resetpassword/resetpassword.component.css":
/*!*******************************************************!*\
  !*** ./app/resetpassword/resetpassword.component.css ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".dec {\r\n  text-decoration: none;\r\n}\r\n.reset-card {\r\n  max-width: 400px;\r\n  margin: auto;\r\n}\r\n.reset-container {\r\n  display: flex;\r\n  flex-direction: column;\r\n}\r\n"

/***/ }),

/***/ "./app/resetpassword/resetpassword.component.html":
/*!********************************************************!*\
  !*** ./app/resetpassword/resetpassword.component.html ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-toolbar color=\"primary\">\r\n  <span>Fundoo Notes</span>\r\n</mat-toolbar><br><br><br><br>\r\n<mat-card class=\"reset-card\">\r\n  <mat-card-title align=\"center\">\r\n    Reset Password\r\n  </mat-card-title>\r\n  <br>\r\n  <br>\r\n\r\n  <mat-card-content>\r\n    <div class=\"reset-container\">\r\n      <mat-form-field>\r\n        <input matInput placeholder=\"Email-id\" required [formControl]=\"emailFormControl\" [(ngModel)]=\"model.email\">\r\n        <mat-error *ngIf=\"emailFormControl.hasError('required')\">\r\n          Email Id is required\r\n        </mat-error>\r\n        <mat-error *ngIf=\"emailFormControl.hasError('pattern')\">\r\n          Email Id is invalid\r\n        </mat-error>\r\n      </mat-form-field>\r\n      <mat-form-field>\r\n        <input matInput placeholder=\"Password\" required type=\"password\" [formControl]=\"passFormControl\" [(ngModel)]=\"model.pass\">\r\n        <mat-error *ngIf=\"passFormControl.hasError('required')\">\r\n          Password is required\r\n        </mat-error>       \r\n      </mat-form-field>\r\n      <mat-form-field>\r\n        <input matInput placeholder=\"Confirm Password\" type=\"password\" required [formControl]=\"cpassFormControl\" [(ngModel)]=\"model.cpass\">\r\n        <mat-error *ngIf=\"cpassFormControl.hasError('required')\">\r\n          Confirm Password is required\r\n        </mat-error>     \r\n      </mat-form-field>\r\n      <br>\r\n      <br>\r\n\r\n      <button mat-raised-button color=\"primary\" type=\"submit\" (click)=\"onSubmit()\">Update</button>\r\n      <br><br>\r\n    </div>\r\n  </mat-card-content>\r\n</mat-card>\r\n"

/***/ }),

/***/ "./app/resetpassword/resetpassword.component.ts":
/*!******************************************************!*\
  !*** ./app/resetpassword/resetpassword.component.ts ***!
  \******************************************************/
/*! exports provided: ResetpasswordComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ResetpasswordComponent", function() { return ResetpasswordComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/forms */ "../node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _services_AccountService__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../services/AccountService */ "./app/services/AccountService.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var ResetpasswordComponent = /** @class */ (function () {
    function ResetpasswordComponent(service) {
        this.service = service;
        this.model = {};
        this.emailFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required,
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].pattern("[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,15}")
        ]);
        this.passFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
        this.cpassFormControl = new _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormControl"]('', [
            _angular_forms__WEBPACK_IMPORTED_MODULE_1__["Validators"].required
        ]);
    }
    ResetpasswordComponent.prototype.ngOnInit = function () {
    };
    ResetpasswordComponent.prototype.onSubmit = function () {
        this.service.ResetData(this.model).subscribe(function (res) {
            console.log("hello", res);
        });
    };
    ResetpasswordComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-resetpassword',
            template: __webpack_require__(/*! ./resetpassword.component.html */ "./app/resetpassword/resetpassword.component.html"),
            styles: [__webpack_require__(/*! ./resetpassword.component.css */ "./app/resetpassword/resetpassword.component.css")],
            providers: [_services_AccountService__WEBPACK_IMPORTED_MODULE_2__["AccountService"]]
        }),
        __metadata("design:paramtypes", [_services_AccountService__WEBPACK_IMPORTED_MODULE_2__["AccountService"]])
    ], ResetpasswordComponent);
    return ResetpasswordComponent;
}());



/***/ }),

/***/ "./app/services/AccountService.ts":
/*!****************************************!*\
  !*** ./app/services/AccountService.ts ***!
  \****************************************/
/*! exports provided: AccountService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AccountService", function() { return AccountService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _constant_constants_services__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../constant/constants.services */ "./app/constant/constants.services.ts");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "../node_modules/@angular/common/fesm5/http.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/operators */ "../node_modules/rxjs/_esm5/operators/index.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var AccountService = /** @class */ (function () {
    function AccountService(http) {
        this.http = http;
        this.httpOptions = {
            headers: new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpHeaders"]({
                'Content-Type': 'application/x-www-form-urlencoded',
            })
        };
    }
    AccountService.prototype.getCountryList = function () {
        return this.http.get("assets/data/country.json");
    };
    AccountService.prototype.getGender = function () {
        return this.http.get("assets/data/Gender1.json");
    };
    AccountService.prototype.getstate = function () {
        return this.http.get("assets/data/State.json");
    };
    AccountService.prototype.Register = function (user) {
        debugger;
        var httpOptions = {
            headers: new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpHeaders"]({
                'Content-Type': 'application/json',
            })
        };
        var data = {
            "FirstName": user.fname,
            "LastName": user.lname,
            "Gender": user.gender1.value,
            "Adhar": user.aadhar,
            "PhoneNumber": user.phone,
            "Address": user.address,
            "State": user.state1.name,
            "City": user.city,
            "Postalcode": user.zip,
            "Email": user.email,
            "Password": user.password
        };
        debugger;
        return this.http.post(_constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].host + _constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].register, data, httpOptions);
    };
    AccountService.prototype.ForgotData = function (forgotData) {
        var httpOptions1 = {
            headers: new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpHeaders"]({
                'Content-Type': 'application/json',
            })
        };
        var data1 = {
            Email: forgotData.email
        };
        //var url = servicesusrls.host + servicesusrls.forgotpass;
        //console.log(url);
        //console.log(data1);
        debugger;
        return this.http.post(_constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].host + _constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].forgotpass, data1, httpOptions1);
    };
    AccountService.prototype.LoginData = function (model) {
        var httpOptions2 = {
            headers: new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpHeaders"]({
                'Content-Type': 'application/json',
            })
        };
        var datas = {
            "Email": model.name,
            "Password": model.pass
        };
        debugger;
        //return this.http.post(servicesusrls.host + servicesusrls.login, datas, httpOptions2).pipe(map((res: Response) => res.text));
        return this.http.post(_constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].host + _constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].login, datas, httpOptions2).pipe(Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__["map"])(function (res) { return res; }));
    };
    AccountService.prototype.ResetData = function (resetData) {
        var httpOptions3 = {
            headers: new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpHeaders"]({
                'Content-Type': 'application/json',
            })
        };
        var data1 = {
            "Email": resetData.email,
            "Password": resetData.pass,
            "ConfirmPassword": resetData.cpass
        };
        debugger;
        return this.http.post(_constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].host + _constant_constants_services__WEBPACK_IMPORTED_MODULE_1__["servicesusrls"].resetpass, data1, httpOptions3);
    };
    AccountService.prototype.Notes = function (notesData) {
        return;
    };
    AccountService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])(),
        __metadata("design:paramtypes", [_angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"]])
    ], AccountService);
    return AccountService;
}());



/***/ }),

/***/ "./app/services/notes.service.ts":
/*!***************************************!*\
  !*** ./app/services/notes.service.ts ***!
  \***************************************/
/*! exports provided: NotesService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NotesService", function() { return NotesService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common/http */ "../node_modules/@angular/common/fesm5/http.js");
/* harmony import */ var _constant_constants_services__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../constant/constants.services */ "./app/constant/constants.services.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var NotesService = /** @class */ (function () {
    function NotesService(http) {
        this.http = http;
    }
    NotesService.prototype.Notes = function (notesData) {
        var httpOptions = {
            headers: new _angular_common_http__WEBPACK_IMPORTED_MODULE_1__["HttpHeaders"]({
                'Content-Type': 'application/json',
            })
        };
        var data = {
            "Title": notesData.title,
            "Note": notesData.note
        };
        return this.http.post(_constant_constants_services__WEBPACK_IMPORTED_MODULE_2__["servicesusrls"].host, data, httpOptions);
    };
    NotesService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])({
            providedIn: 'root'
        }),
        __metadata("design:paramtypes", [_angular_common_http__WEBPACK_IMPORTED_MODULE_1__["HttpClient"]])
    ], NotesService);
    return NotesService;
}());



/***/ }),

/***/ "./app/sidenav/sidenav.component.css":
/*!*******************************************!*\
  !*** ./app/sidenav/sidenav.component.css ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".example {\r\n  background-color: #e8e8e8;\r\n}\r\n\r\n.example-sidenav-container {\r\n  position: absolute;\r\n  top: 0px;\r\n  bottom: 0;\r\n  left: 0;\r\n  right: 0;\r\n}\r\n\r\n.imageset {\r\n  display: flex;\r\n  opacity: 0.5;\r\n}\r\n\r\n.fundoo33 {\r\n  margin-left: 10px;\r\n  opacity: 0.5;\r\n}\r\n\r\n.fundoo-card {\r\n  width: 564px;\r\n  margin-top: 37px;\r\n  margin-left: 298px;\r\n  height: 0px;\r\n}\r\n\r\n.titleinput {\r\n  border: none;\r\n  outline: none;\r\n  font-weight: bold;\r\n  font-size: large;\r\n  margin-bottom: 16px;\r\n}\r\n\r\n.search1 {\r\n  border: none;\r\n  outline: none;\r\n}\r\n\r\n.noteinput {\r\n  border: none;\r\n  outline: none;\r\n  width: 448px;\r\n  font-size: initial;\r\n}\r\n\r\n.fundoo-card1 {\r\n  width: 564px;\r\n  margin-top: 37px;\r\n  margin-left: 298px;\r\n  height: 105px;\r\n}\r\n\r\n.fundoo-card-content {\r\n  font-size: small;\r\n  line-height: 2px;\r\n}\r\n\r\n.button-display {\r\n  display: flex;\r\n  margin-left: -15px;\r\n  margin-right: 10px;\r\n}\r\n\r\n#searchid {\r\n  margin-bottom: 17px;\r\n}\r\n\r\n.closebtn {\r\n  margin-left: 96px;\r\n}\r\n\r\n.content {\r\n  position: absolute;\r\n  top: 60px;\r\n  bottom: 0;\r\n  left: 0;\r\n  right: 0;\r\n}\r\n"

/***/ }),

/***/ "./app/sidenav/sidenav.component.html":
/*!********************************************!*\
  !*** ./app/sidenav/sidenav.component.html ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-sidenav-container class=\"example-sidenav-container\">\r\n  <mat-sidenav-content class=\"example\">\r\n    <mat-card class=\"fundoo-card\" *ngIf=\"mainCard\">\r\n      <input class=\"noteinput\" placeholder=\"Take a note....\" (click)=\"showHideMain()\" />\r\n    </mat-card>\r\n\r\n    <mat-card class=\"fundoo-card1\" *ngIf=\"createCard\">\r\n      <input placeholder=\"Title\" class=\"titleinput\" [(ngModel)]=\"model.title\">\r\n      <br>\r\n      <input class=\"noteinput\" id=\"searchid\" placeholder=\"Take a note....\" [(ngModel)]=\"model.note\" />\r\n\r\n      <div class=\"button-display\">\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/Remainder.svg\" />\r\n        </button>\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/baseline-person_add-24px.svg\" />\r\n        </button>\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/baseline-color_lens-24px.svg\" />\r\n        </button>\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/baseline-photo-24px.svg\" />\r\n        </button>\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/Archieve.svg\" />\r\n        </button>\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/baseline-more_vert-24px.svg\" />\r\n        </button>\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/baseline-undo-24px.svg\" />\r\n        </button>\r\n        <button mat-icon-button class=\"fundoo33\">\r\n          <img src=\"../../assets/image/baseline-redo-24px.svg\" />\r\n        </button>\r\n\r\n        <button mat-button class=\"closebtn\" (click)=\"showHideImp()\">CLOSE</button>\r\n      </div>\r\n    </mat-card>\r\n\r\n  </mat-sidenav-content>\r\n</mat-sidenav-container>\r\n"

/***/ }),

/***/ "./app/sidenav/sidenav.component.ts":
/*!******************************************!*\
  !*** ./app/sidenav/sidenav.component.ts ***!
  \******************************************/
/*! exports provided: SidenavComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SidenavComponent", function() { return SidenavComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _services_notes_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../services/notes.service */ "./app/services/notes.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var SidenavComponent = /** @class */ (function () {
    function SidenavComponent(service) {
        this.service = service;
        this.model = {};
        this.mainCard = true;
        this.createCard = false;
    }
    SidenavComponent.prototype.ngOnInit = function () {
    };
    SidenavComponent.prototype.showHideMain = function () {
        this.mainCard = false;
        this.createCard = true;
    };
    SidenavComponent.prototype.showHideImp = function () {
        this.mainCard = true;
        this.createCard = false;
        this.service.Notes(this.model).subscribe(function (res) {
            console.log("Hello", res);
        });
    };
    SidenavComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-sidenav',
            template: __webpack_require__(/*! ./sidenav.component.html */ "./app/sidenav/sidenav.component.html"),
            styles: [__webpack_require__(/*! ./sidenav.component.css */ "./app/sidenav/sidenav.component.css")]
        }),
        __metadata("design:paramtypes", [_services_notes_service__WEBPACK_IMPORTED_MODULE_1__["NotesService"]])
    ], SidenavComponent);
    return SidenavComponent;
}());



/***/ }),

/***/ "./environments/environment.ts":
/*!*************************************!*\
  !*** ./environments/environment.ts ***!
  \*************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build ---prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.
var environment = {
    production: false
};
/*
 * In development mode, to ignore zone related error stack frames such as
 * `zone.run`, `zoneDelegate.invokeTask` for easier debugging, you can
 * import the following file, but please comment it out in production mode
 * because it will have performance impact when throw error
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ "./main.ts":
/*!*****************!*\
  !*** ./main.ts ***!
  \*****************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "../node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/platform-browser-dynamic */ "../node_modules/@angular/platform-browser-dynamic/fesm5/platform-browser-dynamic.js");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app/app.module */ "./app/app.module.ts");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./environments/environment */ "./environments/environment.ts");




if (_environments_environment__WEBPACK_IMPORTED_MODULE_3__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["enableProdMode"])();
}
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__["platformBrowserDynamic"])().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_2__["AppModule"])
    .catch(function (err) { return console.log(err); });


/***/ }),

/***/ 0:
/*!***********************!*\
  !*** multi ./main.ts ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\selvi\CSharpFunction\ASPNETCoreUserIdentity\ASPNETCoreUserIdentity\ASPNETCoreUserIdentity\Fundoo\src\main.ts */"./main.ts");


/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main.js.map