import $ from "jquery"

class MyNotes {
  constructor() {
    this.events()
  };

  events() {
    $(".delete-note").on("click", this.deleteNote);
    $(".edit-note").on("click", this.editNote.bind(this));
  };

  editNote(e) {
 let thisNote = $(e.target).parents("li");

if(thisNote.data("state") == "editable"){
  this.makeNoteReadOnly(thisNote);
} else{
  this.makeNoteEditable(thisNote);

}

}

  

  makeNoteEditable(e) {

    thisNote.find(".note-title-field, .note-body-field").removeAttr("readonly").addClass("note-active-field");
    thisNote.find(".update-note").addClass("update-note--visible");
    thisNote.find(".edit-note").html('<i class="fa fa-times" aria-hidden="true"></i> Cancel');
    thisNote.data("state", "editable");
  }


  makeNoteReadOnly(e) {

    thisNote.find(".note-title-field, .note-body-field").attr("readonly", "readonly").removeClass("note-active-field");
    thisNote.find(".update-note").removeClassass("update-note--visible");
    thisNote.find(".edit-note").html('<i class="fa fa-pencil" aria-hidden="true"></i> eDIT')
    thisNote.data("state", "cancel");
  }
  // Methods will go here
  deleteNote(e) {
    const thisNote = $(e.target).parents("li");
    $.ajax({
      beforeSend: xhr => {
        xhr.setRequestHeader("X-WP-Nonce", universityData.nonce)
      },
      url: universityData.root_url + "/wp-json/wp/v2/note/" + thisNote.data("id"),
      type: "DELETE",
      success: response => {
        thisNote.slideUp();
        
        console.log("Congrats")
        console.log(response)
      },
      error: response => {
        console.log("Sorry")
        console.log(response)
      }
    })
  };
}

export default MyNotes;
