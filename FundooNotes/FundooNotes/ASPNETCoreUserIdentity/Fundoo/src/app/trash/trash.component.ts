import { Component, OnInit } from '@angular/core';
import { NotesService } from '../services/notes.service';
import { MatDialog, MatDialogRef, MAT_DIALOG_DATA } from '@angular/material';

@Component({
  selector: 'app-trash',
  templateUrl: './trash.component.html',
  styleUrls: ['./trash.component.css']
})
export class TrashComponent implements OnInit {

  notes: any;
  DeleteData: number = 1;
  notesLabel: any;
  collaborator: any;
  DataNotes: any;
  pin: number = 0;
  labels: any;
  archive: number = 0;

  constructor(private service: NotesService) {
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

  MoreIcon(note: any) {
    this.DataNotes = note;
  }

  RestoreNote() {
    this.DataNotes.isTrash = 0;
    this.OnMatCardClickEvent(this.DataNotes);
  }

  DeleteForever() {
    debugger;
    this.service.DeleteNote(this.DataNotes).subscribe(data => {
      console.log(data + "Deleted succesfully");
      this.service.getNotes().subscribe((data:any) => {
        debugger;
        this.notes = data.noteData;
        console.log(data);
      });
    }
    );
  }

  OnMatCardClickEvent(note: any) {
    debugger;
    this.service.updatenotes(note).subscribe(data => {
      console.log(data);
      this.service.getNotes().subscribe((data:any) => {
        this.notes = data.noteData;
        this.labels = data.label;
        console.log(data);
      });
    });  
    this.DeleteData = 0;
  }

  ngOnInit() {
  }


}
