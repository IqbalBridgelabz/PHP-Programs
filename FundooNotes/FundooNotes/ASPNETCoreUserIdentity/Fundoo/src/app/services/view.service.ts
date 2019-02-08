import { Injectable } from '@angular/core';
import { Subject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ViewService {

  constructor() { }

  private result: boolean = true;
  private subject = new Subject();

  getViews() {
    this.gridView();
    return this.subject.asObservable();
  }

  gridView() {
    if (this.result) {
      this.subject.next({ data: "column" });
      this.result = false;
    }
    else {
      this.subject.next({data:"row"})
      this.result = true;
    }

  }
}
