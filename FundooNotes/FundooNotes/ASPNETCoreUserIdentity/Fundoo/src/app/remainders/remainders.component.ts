import { Component, OnInit } from '@angular/core';
import { NotesService } from '../services/notes.service';
import { NotedialogComponent } from '../notedialog/notedialog.component';
import { CollaboratorComponent } from '../collaborator/collaborator.component';
import { MatDialog } from '@angular/material';

@Component({
  selector: 'app-remainders',
  templateUrl: './remainders.component.html',
  styleUrls: ['./remainders.component.css']
})
export class RemaindersComponent implements OnInit {
  selectedFile: File;
  notes: any;
  notesLabel: any;
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
  Image: string;
  ImageUrl: string;
  sharedEmail: any;
  collaboratorEmail: any;
  SharedEmailId: any;
  notesShared: any;
  labels: any;
  updatedNotes: any;
  Email: any = localStorage.getItem('Email');
  labelDisplay: boolean = false;
  labelData: any = null;
  collaborator: any;
  sharedNotes: any;

  constructor(private service: NotesService, public dialog: MatDialog) {
    this.service.getNotes()
      .subscribe((notesData:any) => {
        this.notes = notesData.noteData;
        this.labels = notesData.label;
        console.log(notesData);
      });
    this.notes = null;
    this.ImageUrl = null;

    this.service.getNotesLabel().subscribe(response => {
      this.notesLabel = response;
      console.log(this.notesLabel);
    });

    this.service.getCollaborator().subscribe(responseList => {
      this.collaborator = responseList;
      console.log(this.collaborator);
    });
  }

  ngOnInit() {

  }

  showHideMain() {
    this.mainCard = false;
    this.createCard = true;
  }

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
    }
    else {
      this.mainCard = true;
      this.createCard = false;
    }
  }

  pinNotes() {
    this.pin = 1;
  }

  ArchiveNote() {
    this.archive = 1;
  }

  reminder(note: any) {
    this.NoteId = note;
  }

  Archive(note: any) {
    debugger;
    note.pin = 0;
    note.isArchive = 1;
    this.crud(note);
  }

  More(note: any) {
    this.MoreNotes = note;
  }

  Trash() {
    var note = this.MoreNotes;
    note.isTrash = 1;
    this.crud(note);
  }

  //add label to a particular note
  LabelList(label: any) {
    debugger;
    this.labelDisplay = true;
    var note = this.MoreNotes;
    this.service.addNotesLabel(note, label).subscribe(response => {
      console.log(response);

      this.service.getNotesLabel().subscribe(response => {
        debugger;
        this.notesLabel = response;
        console.log(this.notesLabel);
      })
    });
  }

  ClearLabel(labelNotes: any) {
    debugger;
    this.service.deleteLabelNotes(labelNotes).subscribe(response => {
      console.log(response);
      this.service.getNotesLabel().subscribe(response => {
        this.notesLabel = response;
        console.log(this.notesLabel);
      })
    })
  }

  pinNote(note: any) {
    if (note.isPin == 0) {
      note.isPin = 1;
    }
    else {
      note.isPin = 0;
    }
    this.crud(note);
  }

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

  ClearRemainder(note: any) {
    note.reminder = null;
    this.crud(note);
  }

  getColorNote(note: any) {
    this.ColorNote = note;
  }

  setcolor(color: any) {
    this.getColor = color;
    this.ColorNote.colorCode = this.getColor;
    this.crud(this.ColorNote);
  }

  crud(note: any) {
    debugger;
    this.service.updatenotes(note).subscribe((data: any) => {
      this.service.getNotes().subscribe((notesData: any) => {
        this.notes = notesData.noteData;
        this.ImageUrl = null;
        this.labels = notesData.label;
      });
    });
  }

  TitleDialog(note): void {
    const dialogRef = this.dialog.open(NotedialogComponent, {
      data: { note: note, notes: this.updatedNotes, label: this.labels }
    });
    dialogRef.afterClosed().subscribe(result => {
      debugger;
      this.crud(result);
      console.log("Dialog result:" + result);
    });
  }

  //adding collaborator from mat-dialog collaborator
  collaboratorDialog(note) {
    const dialogRef = this.dialog.open(CollaboratorComponent, {
      data: { sharedEmail: this.sharedEmail, sharedNote: note, EmailNote: this.SharedEmailId }
    });
    dialogRef.afterClosed().subscribe(result => {
      debugger;
      console.log("Collaborator " + result);
      this.service.shareNote(result).subscribe((responseData: any) => {
        console.log(responseData.email);
        debugger;
        if (responseData.email != null) {
          this.collaboratorEmail = responseData.email;
          this.service.addCollaborator(note, this.collaboratorEmail).subscribe(response => {
            debugger;
            console.log(response);
            this.service.getCollaborator().subscribe(responseList => {
              this.collaborator = responseList;
              console.log(this.collaborator);
            })
          });
        }
      })
    })
  }

  //image upload in server side
  onFileChanged(event, note: any) {
    debugger;
    console.log(event);
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
