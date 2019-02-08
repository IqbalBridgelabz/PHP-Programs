import { Component, OnInit, Inject } from '@angular/core';
import { MAT_DIALOG_DATA, MatDialogRef } from '@angular/material';
import { NotesService } from '../services/notes.service';
import { DataCollaborator } from '../notes/notes.component';

@Component({
  selector: 'app-collaborator',
  templateUrl: './collaborator.component.html',
  styleUrls: ['./collaborator.component.css']
})
export class CollaboratorComponent implements OnInit {

  Email: any = localStorage.getItem('Email');
  symbol: string = this.Email.substring(0, 1);
  Firstname: string = localStorage.getItem('Firstname');
  lastname: string = localStorage.getItem('Lastname');
  name: string = this.Firstname + "" + this.lastname;
  noteId: string;
  sharedEmailSymbol: string = null;
  SharedEmailId: any = null;
  collaboratorArray: any;
  collaborator: any;
  ShareIdDisplay: boolean = false;
  collaboratedData: any = [];
  EmailId: any = null;

  constructor(public dialogRef: MatDialogRef<CollaboratorComponent>,
    @Inject(MAT_DIALOG_DATA) public data: DataCollaborator, public service: NotesService) { }


  ngOnInit() {

    if (this.data.sharedNote.email != this.Email) {
      this.EmailId = this.data.sharedNote.email
    }
    else {
      this.ShareIdDisplay = true;
      this.EmailId = this.Email;
    }

    this.service.getCollaborator().subscribe(responseList => {
      debugger;
      this.collaborator = responseList;
      for (var item of this.collaborator) {
        if (this.data.sharedNote.id == item.noteId) {
          this.SharedEmailId = item.sharedId;
        }
      }
    });    
  }




  //ngOnInit() {
  //  for (let value of this.data.emailShared) {
  //    this.noteId = value.id;
  //    if (this.noteId == this.data.sharedNote) {
  //      debugger;
  //      if (value.collaborator!=null) {
  //        this.collaboratorArray = value.collaborator;
  //        this.collaboratedData = this.collaboratorArray.split(",");
  //        console.log(this.collaboratedData);
  //        for (var item of this.collaboratedData) {
  //          if (item == this.Email) {
  //            this.SharedEmailId = value.email;
  //            this.sharedEmailSymbol = this.SharedEmailId.substring(0, 1);
  //          }
  //        }
  //      }        
  //    }
  //  }
    
    //this.service.getCollaborator().subscribe(responseList => {
    //  this.collaborator = responseList;
    //  console.log(this.collaborator);
    //});




  
  onNoClick(): void {
    debugger;
    this.dialogRef.close();
  }
}
