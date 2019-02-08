import { Component, OnInit } from '@angular/core';
import { NotesService } from '../services/notes.service';
import { MatDialog } from '@angular/material';
import { NotedialogComponent } from '../notedialog/notedialog.component';
import { CollaboratorComponent } from '../collaborator/collaborator.component';

@Component({
  selector: 'app-archive',
  templateUrl: './archive.component.html',
  styleUrls: ['./archive.component.css']
})
export class ArchiveComponent implements OnInit {
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
      .subscribe((res: any) => {
        this.notes = res.noteData;
        this.labels = res.label;
      });
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

 
  pinNotes(note:any) {
    note.isPin = 1;
    note.isArchive = 0;
    this.crud(note);
  }

  reminder(note: any) {
    this.NoteId = note;
  }

  unArchive(note: any) {
    debugger;
    note.isArchive = 0;
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

  LabelList(label: any) {
    debugger;
    this.labelDisplay = true;
    var note = this.MoreNotes;
    this.service.addNotesLabel(note, label).subscribe(response => {
      console.log(response);
      this.service.getNotesLabel().subscribe(response => {
        this.notesLabel = response;
        console.log(this.notesLabel);
      })
    });
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
        this.labels = notesData.label;
      });
    });
  }

  ClearRemainder(note: any) {
    note.reminder = null;
    this.crud(note);
  }

  //deleting the label for a particular note
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
