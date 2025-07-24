@extends('admin-main.layouts.default')

@section('content')

<!-- Page Header -->
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Add Question</li>
    </ol>
</div>

<!-- Form Container -->
<div class="container-fluid p-2">
    <form action="" method="POST">
        @csrf

        <!-- Language Selection -->
        <div class="mb-3">
            <label class="form-label">Language</label>
            <div class="col-sm-5">
                <select name="language_id" class="form-control">
                    <option value="2">Hindi</option>
                </select>
            </div>
        </div>

        <h5><strong>Question Type: Objective</strong></h5>

        <!-- Question/Options Buttons -->
        <div id="objectiveFields">
            <div class="mb-3">
                <button type="button" class="btn btn-light btn-sm mb-2 field-btn" data-field="question">Question</button>
                <button type="button" class="btn btn-light btn-sm mb-2 field-btn" data-field="option1">Option1</button>
                <button type="button" class="btn btn-light btn-sm mb-2 field-btn" data-field="option2">Option2</button>
                <button type="button" class="btn btn-light btn-sm mb-2 field-btn" data-field="option3">Option3</button>
                <button type="button" class="btn btn-light btn-sm mb-2 field-btn" data-field="option4">Option4</button>
                <button type="button" class="btn btn-light btn-sm mb-2 field-btn" data-field="option5">Option5</button>
                <button type="button" class="btn btn-light btn-sm mb-2 field-btn" data-field="option6">Option6</button>
            </div>

            <!-- Editor Textarea for Question/Options -->
            <div class="mb-3">
                <label class="form-label" id="fieldLabel">Question</label>
                <textarea name="question" class="form-control" rows="3" id="fieldTextarea" placeholder="Type your question here"></textarea>
                <button type="button" id="loadFieldEditor" class="btn btn-outline-secondary btn-sm mt-2">Load Editor</button>
            </div>
        </div>

        <!-- Explanation Section -->
        <div class="mb-3">
            <label class="form-label">Explanation (Optional)</label>
            <textarea name="explanation" class="form-control" rows="3" id="explanationTextarea" placeholder="Provide explanation in support of correct answer"></textarea>
            <button type="button" id="loadExplanationEditor" class="btn btn-outline-secondary btn-sm mt-2">Load Editor</button>
        </div>

        <!-- Hint -->
        <div class="mb-3">
            <label class="form-label">Hint (Optional)</label>
            <input type="text" name="hint" class="form-control" placeholder="Hint to help answer correctly">
        </div>

        <!-- Save & Close Buttons -->
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/questions') }}" class="btn btn-danger">
                <i class="fa fa-times"></i> Close
            </a>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- TinyMCE Script -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    $(document).ready(function () {

        // Change field (question, option1, option2, etc.)
        $('.field-btn').click(function () {
            var field = $(this).data('field');
            var label = field.charAt(0).toUpperCase() + field.slice(1);

            // Remove previous TinyMCE instance
            if (tinymce.get('fieldTextarea')) {
                tinymce.get('fieldTextarea').remove();
            }

            // Change textarea attributes
            $('#fieldLabel').text(label);
            $('#fieldTextarea')
                .attr('name', field)
                .attr('placeholder', 'Type your ' + label.toLowerCase() + ' here')
                .val('');
        });

        // Load TinyMCE on Question/Option field
        $('#loadFieldEditor').click(function () {
            if (!tinymce.get('fieldTextarea')) {
                tinymce.init({
                    selector: '#fieldTextarea',
                    height: 300,
                    plugins: [
                        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace',
                        'table', 'visualblocks', 'wordcount', 'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed',
                        'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage',
                        'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags',
                        'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
                    ],
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author',
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('AI Assistant not configured')),
                });
            }
        });

        // Load TinyMCE on Explanation field
        $('#loadExplanationEditor').click(function () {
            if (!tinymce.get('explanationTextarea')) {
                tinymce.init({
                    selector: '#explanationTextarea',
                    height: 300,
                    plugins: [
                        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace',
                        'table', 'visualblocks', 'wordcount', 'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed',
                        'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage',
                        'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags',
                        'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
                    ],
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author',
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('AI Assistant not configured')),
                });
            }
        });

    });
</script>
@endpush
