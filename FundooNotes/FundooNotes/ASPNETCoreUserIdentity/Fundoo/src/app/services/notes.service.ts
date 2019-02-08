import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { servicesusrls } from '../constant/constants.services';
import { map } from 'rxjs/operators';
import { Response } from '@angular/http';
import { Observable, BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class NotesService {

  Email: any = localStorage.getItem('Email');
  ID: number;
  sharedEmail: any;
  selectedFile: File;
  Collaborator: any;

  constructor(private http: HttpClient) { }


  //service to create notes
  Notes(notesData: any, archive: number, pin: number, color: any, reminder: any, Image: any, label: any) {
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    var data = {
      "Title": notesData.title,
      "Content": notesData.note,
      "Email": localStorage.getItem('Email'),
      "IsArchive": archive,
      "IsPin": pin,
      "ColorCode": color,
      "Reminder": reminder,
      "ImageUrl": Image
    }
    return this.http.post(servicesusrls.host+ servicesusrls.notes, data, httpOptions);
  }
 
  //to get note
  getNotes() {
    debugger;
    this.Email = localStorage.getItem('Email')
    return this.http.get(servicesusrls.host + servicesusrls.notes + "/" + this.Email).pipe(
      map((res: Response) => res)
  );
  }


  //to Update Note
  updatenotes(note: any) {
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    var data = {
      "Title": note.title,
      "Content": note.content,
      "ColorCode":note.colorCode,
      "Email": this.Email,
      "IsArchive": note.isArchive,
      "IsPin": note.isPin,
      "IsTrash": note.isTrash,
      "Reminder": note.reminder,
      "ImageUrl": note.imageUrl,
      "Collaborator": note.collaborator
    }
    return this.http.put(servicesusrls.host + servicesusrls.updateNotes + "/" + note.id, data, httpOptions);
  }

  //to Delete Note
  DeleteNote(note: any) {
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    return this.http.delete(servicesusrls.host + servicesusrls.deleteNotes + "/" + note.id, httpOptions);
  }

  //to Add Label
  addLabel(label: any) {
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    var labelData = label;
    var data = {
      "Email": this.Email,
      "Label": labelData
    };
    debugger;
    return this.http.post(servicesusrls.host + servicesusrls.labelNotes, data, httpOptions).pipe(
      map((res: Response) => res)
      );
  }


  getLabel() {
    this.Email = localStorage.getItem('Email');
    return this.http.get(servicesusrls.host + servicesusrls.getLabelNotes + "/" + this.Email).pipe(
      map((res: Response) => res)
    );
  }


  updateLabel(label:any) {
    debugger;
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    var dataLabel = {
      "Email": this.Email,
      "Label": label.label
    }
    debugger;
    return this.http.put(servicesusrls.host + servicesusrls.updateLabel + "/" + label.id, dataLabel, httpOptions);
  }


  deleteLabel(label: any) {
    debugger;
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    return this.http.delete(servicesusrls.host + servicesusrls.deleteLabel + "/" + label.id, httpOptions);
  }


  addImage(imageToUpload: any): Observable<any>{
    this.selectedFile = imageToUpload;
    let uploadData = new FormData();
    uploadData.append('file', imageToUpload);
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };    
    return this.http.post(servicesusrls.host + servicesusrls.addImage, uploadData).pipe(
      map((res: Response) => res)
    );
  }


  shareNote(shareEmail: any) {
    this.sharedEmail = shareEmail;
    var data = {
      "Collaborator": this.sharedEmail
    };
   
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    return this.http.post(servicesusrls.host + servicesusrls.shareCollaborator, data, httpOptions).pipe(
      map((res: Response) =>res)
    );
  }

  addNotesLabel(note: any, label: any) {
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    var data = {
      "LableId":label.id,
      "NoteId":note.id,
      "Email": this.Email
    }
    return this.http.post(servicesusrls.host + servicesusrls.addNotesLabel, data, httpOptions).pipe(
      map((res: Response) => res)
    );
  }

  getNotesLabel() {
    this.Email = localStorage.getItem('Email');
    return this.http.get(servicesusrls.host + servicesusrls.getNotesLabel + "/" + this.Email).pipe(
      map((res: Response) => res)
    );
  }


  deleteLabelNotes(NotesLabel: any) {
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    return this.http.delete(servicesusrls.host + servicesusrls.deleteNotesLabel + "/" + NotesLabel.id, httpOptions);
  }


  addCollaborator(note:any,shareId:any) {
    var httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
      })
    };
    debugger;
    var data = {
      "SharedId": shareId,
      "NoteId": note.id,
      "Email": this.Email
    }
    return this.http.post(servicesusrls.host + servicesusrls.addNotesCollaborator, data, httpOptions).pipe(
      map((res: Response) => res)
    );
  }


  getCollaborator() {
    this.Email = localStorage.getItem('Email');
    return this.http.get(servicesusrls.host + servicesusrls.getNotesCollaborator + "/" + this.Email).pipe(
      map((res: Response) => res)
    );
  }
}
