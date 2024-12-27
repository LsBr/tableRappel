<div class="modal fade" id="modalAssoc" tabindex="-1" aria-labelledby="modalAssocLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAssocLabel">Add an entry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" id="formAssocAction" class="needs-validation" novalidate>
                <div class="modal-body my-4">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="numberInput" placeholder="" value=""
                                    min="0" name="numberForm" required>
                                <label for="numberInput">Number</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="wordInput" placeholder="" value=""
                                    pattern="[\p{L}]*" name="wordForm" required>
                                <label for="wordInput">Word</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md">
                            <div class="img-assoc-container" id="img-assoc-container-modal">
                                <img src="" id="imgAssocPreview" class="img-assoc" onerror="this.src='IMG/noImgDefault.jpg'">
                            </div>
                            <div class="form-floating">
                                <input type="url" class="form-control" id="urlInput" placeholder="" value=""
                                    name="imgUrlForm">
                                <label for="urlInput">Image Url</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="assocId" value="" id="assocIdInput"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnModalAction" data-action-type="add">Add</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript" src="JS/formValidation.js"></script>
<script type="text/javascript" src="JS/submitAssocForm.js"></script>
<script type="text/javascript" src="JS/editAssoc.js"></script>
<script type="text/javascript" src="JS/updateImgModal.js"></script>