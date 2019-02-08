import { Component, OnInit, Inject } from '@angular/core';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material';
import { NoteDialogData } from '../notes/notes.component';
import { NotesService } from '../services/notes.service';

@Component({
  selector: 'app-notedialog',
  templateUrl: './notedialog.component.html',
  styleUrls: ['./notedialog.component.css']
})
export class NotedialogComponent implements OnInit {

  MoreNotes: any;
  pin: number;
  notes: any;
  NoteId: any;
  remainderData: any; 
  remainderDisplay: boolean = false;
  labelData: any;
  selectedFile: File;
  labelValue: any;
  Image: any;

  constructor(public dialogRef: MatDialogRef<NotedialogComponent>,
    @Inject(MAT_DIALOG_DATA) public data: NoteDialogData, private service: NotesService) {
    this.data.notes = this.data.note;
  }

  ngOnInit(){
    
  }

  //pin Notes for pinned and upinned
  pinNotes(note) {
    debugger;
    if (note.isPin == 1) {
      note.isPin = 0;
    } else {
      note.isPin = 1;
    }
    this.data.notes = note;
  }

  //archive Notes for pinned and upinned
  Archive(note) {
    debugger;
    if (note.isArchive==0) {
      note.isArchive = 1;
      note.isPin = 0;
    }
    this.data.notes = note;
  }

  //color Notes for pinned and upinned
  setcolor(color, note) {
    debugger;
    note.colorCode = color;
    this.data.notes = note;
  }

  //reminder notes for pinned and unpinned
  reminder(note: any) {
    this.NoteId = note;
  }

  //today reminder
  today() {
    debugger;
    var remindedNote = this.NoteId;
    this.remainderDisplay = true;
    var day = new Date();
    day.setDate(day.getDate());
    this.remainderData = day.toUTCString().substring(0, 22);
    remindedNote.reminder = this.remainderData;
    this.data.notes = remindedNote;
  }

  //tomorrow reminder
  tomorrow() {
    var remindedNote = this.NoteId;
    this.remainderDisplay = true;
    var day = new Date();
    day.setDate(day.getDate() + 1);
    this.remainderData = day.toUTCString().substring(0, 22);
    remindedNote.reminder = this.remainderData;
    this.data.notes = remindedNote;
  }

  //next week reminder
  nextWeek() {
    var remindedNote = this.NoteId;
    this.remainderDisplay = true;
    var day = new Date();
    day.setDate(day.getDate() + (1 + 7 - day.getDay()) % 7);
    this.remainderData = day.toUTCString().substring(0, 22);
    remindedNote.reminder = this.remainderData;
    this.data.notes = remindedNote;
  }

  //deleting the reminder for a particular note
  ClearRemainder(note: any) {
    note.reminder = null;
    this.data.notes = note;
  }

  //More button
  More(note: any) {
    this.MoreNotes = note;
  }

  //to delete a particular note
  Trash() {
    var note = this.MoreNotes;
    note.isTrash = 1;
    this.data.notes = note;
  }

  //add label to a particular note
  LabelList(label: any) {
    debugger;
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
    this.data.notes = note;
  }

  //Image upload
  onFileChanged(event, note: any) {
    this.selectedFile = <File>event.target.files[0];
    console.log(this.selectedFile);
    this.service.addImage(this.selectedFile).subscribe(data => {
      debugger;
      this.Image = data.data;
      note.imageUrl = this.Image;
      this.data.notes = note;
    });
  }

}
