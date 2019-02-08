import { Component, OnInit } from '@angular/core';
import { NotesService } from '../services/notes.service';
import { formatDate } from '@angular/common';
import { MatDialog } from '@angular/material';
import { NotedialogComponent } from '../notedialog/notedialog.component';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { CollaboratorComponent } from '../collaborator/collaborator.component';

export interface NoteDialogData {
  title: string;
  content: string;
}

export interface DataCollaborator {
  sharedEmail: string;
  emailShared: any;
  sharedNote: string;
  SharedEmailId: any;
}

@Component({
  selector: 'app-label',
  templateUrl: './label.component.html',
  styleUrls: ['./label.component.css']
})
export class LabelComponent implements OnInit {

  selectedFile: File;
  notes: any;
  remindedNotes: any;
  model: any = {}
  archive: number = 0;
  pin: number = 0;
  mainCard: boolean = true;
  createCard: boolean = false;
  getColor: any;
  remainderDisplay: boolean = false;
  remainderData: any;
  MoreNotes: any;
  NoteId: any;
  DateTime: boolean = false;
  ColorNote: any;
  title: string;
  content: string;
  Image: string;
  ImageUrl: string;
  sharedEmail: any;
  collaboratorData: any = [];
  collaboratorEmail: any;
  SharedEmailId: any;
  notesShared: any;
  labels: any;
  labelListCard: boolean = false;
  labelValue: any = [];
  Email: any = localStorage.getItem('Email');
  labelDisplay: boolean = false;
  labelData: any = null;
  label: any;
  notesLabel: any;
  multipleNote: any = [];
  i : number= 0;

  constructor(private service: NotesService, public dialog: MatDialog, private http: HttpClient) {
    this.service.getNotes()
    .subscribe((notesData: any) => {
      this.notes = notesData.noteData;
      this.labels = notesData.label;
      console.log(notesData);
    });
    this.notes = null;

    this.service.getNotesLabel().subscribe(response => {
      this.notesLabel = response;
      console.log(this.notesLabel);
    });

    for (var note of this.notesLabel) {      
      if (this.label == this.notesLabel.labelId) {
        this.multipleNote[this.i] = this.notesLabel.noteId;
        this.i = this.i + 1;
      }
    }
  }

  ngOnInit() {
    this.label = localStorage.getItem('label');
    localStorage.removeItem('label');
  }

  onDestroy() {
   
  }

  showHideMain() {
    this.mainCard = false;
    this.createCard = true;
  }

  //create a note
  CloseNote() {
    debugger;
    if ((this.model.title != "" || this.model.note != "") && (this.model.title != undefined || this.model.note != undefined)) {
      this.service.Notes(this.model, this.archive, this.pin, this.getColor, this.remainderData, this.Image, this.labelData).subscribe(data => {
        console.log(data);
        this.service.getNotes().subscribe((data: any) => {
          this.notes = data.noteData;
          this.labels = data.label;
          console.log(data);
        });
      });
      this.model.title = "";
      this.model.note = "";
      this.archive = 0;
      this.pin = 0;
      this.mainCard = true;
      this.createCard = false;
      this.remainderDisplay = false;
      this.remainderData = null;
      this.Image = null;
      this.ImageUrl = null;
      this.archive = 0;
      this.getColor = null;
      this.labelData = null;
      this.labelDisplay = false;
    }
    else {
      this.mainCard = true;
      this.createCard = false;
      this.ImageUrl = null;
    }
  }

  pinNotes() {
    this.pin = 1;
  }

  ArchiveNote() {
    this.archive = 1;
  }

  //getting the note on particular click
  reminder(note: any) {
    this.NoteId = note;
  }

  //archive a particular note
  Archive(note: any) {
    debugger;
    note.isPin = 0;
    note.isArchive = 1;
    this.crud(note);
  }


  More(note: any) {
    this.MoreNotes = note;
  }

  //to delete a particular note
  Trash() {
    var note = this.MoreNotes;
    note.isTrash = 1;
    this.crud(note);
  }

  //add label to a particular note
  LabelList(label: any) {
    debugger;
    this.labelDisplay = true;
    this.labelData = label;
    var note = this.MoreNotes;
    if (note.label != null) {
      var count = 0;
      this.labelValue = note.label.split(",");
      for (var item of this.labelValue) {
        if (item == label) {
          count = 1;
        }
      }
      if (count == 0) {
        note.label = note.label + "," + label;
      }
    }
    else {
      note.label = label;
    }
    this.crud(note);
  }

  //pin and unpin notes
  pinNote(note: any) {
    if (note.isPin == 0) {
      note.isPin = 1;
    }
    else {
      note.isPin = 0;
    }
    this.crud(note);
  }

  //today reminder
  today() {
    var remindedNote = this.NoteId;
    this.remainderDisplay = true;
    var day = new Date();
    day.setDate(day.getDate());
    this.remainderData = day.toUTCString().substring(0, 22);
    remindedNote.reminder = this.remainderData;
    var status = 'reminder';
    this.crud(remindedNote)
  }

  //tomorrow reminder
  tomorrow() {
    var remindedNote = this.NoteId;
    this.remainderDisplay = true;
    var day = new Date();
    day.setDate(day.getDate() + 1);
    this.remainderData = day.toUTCString().substring(0, 22);
    remindedNote.reminder = this.remainderData;
    var status = 'reminder';
    this.crud(remindedNote)
  }

  //next week reminder
  nextWeek() {
    var remindedNote = this.NoteId;
    this.remainderDisplay = true;
    var day = new Date();
    day.setDate(day.getDate() + (1 + 7 - day.getDay()) % 7);
    this.remainderData = day.toUTCString().substring(0, 22);
    remindedNote.reminder = this.remainderData;
    var status = 'reminder';
    this.crud(remindedNote)
  }

  //deleting the reminder for a particular note
  ClearRemainder(note: any) {
    note.reminder = null;
    this.crud(note);
  }

  //deleting the label for a particular note
  ClearLabel(note: any) {
    note.label = null;
    this.crud(note);
  }

  //getting the note that is to be coloured
  getColorNote(note: any) {
    this.ColorNote = note;
  }

  //getting the appropriate color on color pallete click
  setcolor(color: any) {
    this.getColor = color;
    this.ColorNote.colorCode = this.getColor;
    this.crud(this.ColorNote);
  }

  //CRUD functioning in note
  crud(note: any) {
    debugger;
    this.service.updatenotes(note).subscribe((data: any) => {
      this.service.getNotes().subscribe((notesData: any) => {
        this.notes = notesData.noteData;
        this.labels = notesData.label;
      });
    });
  }

  //editing the note 
  TitleDialog(note): void {
    console.log(this.title)
    const dialogRef = this.dialog.open(NotedialogComponent, {
      data: { title: note }
    });
    dialogRef.afterClosed().subscribe(result => {
      console.log("Dialog result:" + result);
    });
  }

  //adding collaborator from mat-dialog collaborator
  collaboratorDialog(note) {
    const dialogRef = this.dialog.open(CollaboratorComponent, {
      data: { sharedEmail: this.sharedEmail, emailShared: this.notes, sharedNote: note.id, SharedEmailId: this.SharedEmailId }
    });
    dialogRef.afterClosed().subscribe(result => {
      debugger;
      console.log("Collaborator " + result);
      this.service.shareNote(result).subscribe((responseData: any) => {
        console.log(responseData.email);
        debugger;
        if (responseData.email != null) {
          this.collaboratorEmail = responseData.email;
          if (note.collaborator != null) {
            var count = 0;
            this.collaboratorData = note.collaborator.split(",");
            for (var item of this.collaboratorData) {
              if (item == this.collaboratorEmail) {
                count = 1;
              }
            }
            if (count == 0) {
              note.collaborator = note.collaborator + "," + this.collaboratorEmail;
            }
          }
          else {
            note.collaborator = this.collaboratorEmail;
          }
          this.crud(note);
        }
      })
    })
  }

  //image upload in server side
  onFileChanged(event, note: any) {
    this.selectedFile = <File>event.target.files[0];
    console.log(this.selectedFile);
    this.service.addImage(this.selectedFile).subscribe(data => {
      debugger;
      this.ImageUrl = data.data;
      this.Image = data.data;
      console.log(this.Image);
      note.imageUrl = this.Image;
      this.crud(note);
    });
  }
}
