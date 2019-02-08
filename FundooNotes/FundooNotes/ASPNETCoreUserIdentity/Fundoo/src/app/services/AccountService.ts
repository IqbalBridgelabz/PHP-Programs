import { Injectable } from '@angular/core';
import { servicesusrls } from '../constant/constants.services';
import { HttpClient, HttpParams, HttpHeaders, HttpResponse } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { Observable } from 'rxjs';
import { log } from 'util';
import { catchError } from 'rxjs/operators';
@Injectable()

export class AccountService {

  constructor(private http: HttpClient) {

  }

  getCountryList(): Observable<any> {
    return this.http.get("assets/data/country.json")
  }

  getGender() {
    return this.http.get("assets/data/Gender1.json");
  }

  getstate() {
    return this.http.get("assets/data/State.json");
  }

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/x-www-form-urlencoded',
    })
  };

  Register(user: any) {
      var httpOptions = {
      headers: new HttpHeaders({
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
    }


    
    return this.http.post(servicesusrls.host + servicesusrls.register, data, httpOptions).pipe(
      map((res: Response) => res)
    );
  }

  ForgotData(forgotData: any) {
    var httpOptions1 = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    var data1 = {
      Email: forgotData.email
    }
    return this.http.post(servicesusrls.host + servicesusrls.forgotpass, data1, httpOptions1).pipe(
      map(result => result)
    );
  }

  LoginData(model: any) {
    var httpOptions2 = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    var datas = {
      "Email": model.name,
      "Password": model.pass
    }
   
    //return this.http.post(servicesusrls.host + servicesusrls.login, datas, httpOptions2).pipe(map((res: Response) => res.text));
    return this.http.post(servicesusrls.host + servicesusrls.login, datas, httpOptions2).pipe(
      map((res: Response) => res)
    );
  }

  ResetData(resetData: any,code:any) {
    var httpOptions3 = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    var data1 = {
      "Email": resetData.email,
      "Password": resetData.pass,
      "ConfirmPassword": resetData.cpass,
      "code":code
    }
    debugger;
    return this.http.post(servicesusrls.host + servicesusrls.resetpass, data1, httpOptions3).pipe(
      map(result => result)
    );
  }
}
