import { Component, OnInit, Inject } from '@angular/core';
import { MAT_DIALOG_DATA, MatDialogRef } from '@angular/material';
import { DialogData } from '../fundoo/fundoo.component';
import { NotesService } from '../services/notes.service';

@Component({
  selector: 'app-editdialogbox',
  templateUrl: './editdialogbox.component.html',
  styleUrls: ['./editdialogbox.component.css']
})
export class EditdialogboxComponent implements OnInit {

  Data: any;
  editInput: boolean = false;
  LabelData: any;
  labelUpdate: any;
  deleteIcon: boolean = false;
  doneIcon: boolean = false;


  constructor(public dialogRef: MatDialogRef<EditdialogboxComponent>,
    @Inject(MAT_DIALOG_DATA) public data: DialogData, public service: NotesService) {

    this.data.labelUpdate = {
      "id": null,
      "label": null,
      "email":null
    }
  }

  ngOnInit() {
  }


  onNoClick(): void {
    debugger;
    this.dialogRef.close();
  }

  //clear the text in input field
  Clear() {
    debugger;
    this.data.labelInput = "";
  }

  //on click edit it will bind the updated value
  EditLabel(label: any) {
    this.LabelData = label;
    this.editInput = true;
  }
  
  //on change event to update the search event
  onSearchChange(labelName: any) {
  this.labelUpdate = labelName;
    console.log(this.labelUpdate);
  }

  //to call update api accordingly to update the label details
  UpdateLabel(lbl) {
    debugger;
    lbl.label = this.labelUpdate;
    this.data.labelUpdate = lbl;
  }
  
  //to call delete api accordingly to delete the label details
  DeleteData(label) {
    debugger;
    label.label = null;
    this.data.labelUpdate = label;
  } 
}
