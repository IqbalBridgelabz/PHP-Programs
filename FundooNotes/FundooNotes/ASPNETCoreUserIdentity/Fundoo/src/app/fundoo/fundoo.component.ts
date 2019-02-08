import { Component, OnInit } from '@angular/core';
import { MatDialog } from '@angular/material';
import { EditdialogboxComponent } from '../editdialogbox/editdialogbox.component';
import { NotesService } from '../services/notes.service';
import { Router } from '@angular/router';
import { Local } from 'protractor/built/driverProviders';
import { debug, error } from 'util';
import { Observable } from 'rxjs/internal/Observable';
import { ViewService } from '../services/view.service';

export interface DialogData {
  label: any;
  labelInput: any;
  labelUpdate: any;
}

@Component({
  selector: 'app-fundoo',
  templateUrl: './fundoo.component.html',
  styleUrls: ['./fundoo.component.css']
})
export class FundooComponent implements OnInit {
  public agendaQuilt: boolean = false;
  FundooShow: boolean= true;
  ShowTitle: any;
  getColor: any;
  searchBarColor: any;
  model: any = {};
  label: any;
  noteLabel: any;
  logoutCard: boolean = false;
  labelUpdate: any;
  Email: any = localStorage.getItem('Email');
  removeAccount: any;
  symbol: string = this.Email.substring(0, 1);
  Firstname: string = localStorage.getItem('Firstname');
  lastname: string = localStorage.getItem('Lastname');
  name: string = this.Firstname + " " + this.lastname;
  view: any = false;
  width: any;
  sub: any;
  grid: boolean = false;
  list: boolean = true;

  constructor(public dialog: MatDialog, public service: NotesService, private router: Router, public viewServiceObj: ViewService) {
    this.getColor = '#ffbb00';
    this.searchBarColor = '#f5b400';
    this.service.getLabel().subscribe(responseLabel => {
      this.noteLabel = responseLabel;
      console.log(this.noteLabel);
    });

    this.changeView();
  }

  ngOnInit() {

  }
 
  OpenEdit(): void {
    debugger;
    const dialogRef = this.dialog.open(EditdialogboxComponent, {
      data: { label: this.noteLabel, labelInput: this.label, labelUpdate: this.labelUpdate }
    });
    dialogRef.afterClosed().subscribe(result => {
      debugger;
      if (result.id == null) {
        if (result.label != undefined && result.label != "") {
          this.label = result.label;
          this.service.addLabel(this.label).subscribe(responseData => {
            console.log(responseData);
            this.service.getLabel().subscribe(responseLabel => {
              debugger;
              this.noteLabel = responseLabel;
              console.log(this.noteLabel);
            });
          }, error => {
            console.log("something went wrong");
          });
        }
      }
      else if (result.id != null && (result.label != null || result.label != undefined)) {
        this.service.updateLabel(result).subscribe(response => {
          console.log(response);
          this.service.getLabel().subscribe(responseLabel => {
            this.noteLabel = responseLabel;
            console.log(this.noteLabel);
          });
        });

      }
      else if (result.id != null && (result.label == null || result.label == undefined)) {
        this.service.deleteLabel(result).subscribe(response => {
          console.log(response);
          this.service.getLabel().subscribe(responseLabel => {
            this.noteLabel = responseLabel;
            console.log(this.noteLabel);
          });
        });
      }
      console.log("Dialog result:" + result);
        
    });
  }

  Fundoonotes() {
    this.FundooShow = true;
    this.getColor = '#ffbb00';
    this.searchBarColor = '#f5b400';
  }

  Remainder() {
    this.FundooShow = false;
    this.ShowTitle = "Remainder";
    this.getColor = 'rgb(96, 125, 139)';
    this.searchBarColor = 'rgb(122, 146, 158)';
  }

  Archive() {
    this.FundooShow = false;
    this.ShowTitle = "Archive";
    this.getColor = 'rgb(96, 125, 139)';
    this.searchBarColor = 'rgb(122, 146, 158)';
  }

  Trash() {
    this.FundooShow = false;
    this.ShowTitle = "Trash";
    this.getColor = 'rgb(99, 99, 99)';
    this.searchBarColor = 'rgb(124, 124, 124)';
  }

  signOut() {
    debugger;
    localStorage.removeItem('Email');
    this.router.navigate(['/login']);
  }

  changeView() {
    debugger;
    if (this.list == true) {

      this.grid = true;
      this.list = false;
    }
    else {
      this.list = true;
      this.grid = false;
    }

    this.viewServiceObj.gridView();


  }

  LabelRedirect(label: any) {
    debugger;
    localStorage.setItem('label', label);
    this.router.navigate(['/fundoo/label']);
  }

}
