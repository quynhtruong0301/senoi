@extends('Admin::app')
@section('page', 'Danh mục')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 style="margin-right: 30px" class="mr-5">Tạo danh mục mới</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form method="post" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Topic
                                        </th>
                                        <td>
                                            <select required name="topic_id" class="form-control w-100">
                                                @foreach($topics as $item)
                                                    <option
                                                        {{ old('topic_id') == $item->id ? 'selected' : ''  }} value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('topic_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Tiêu đề
                                        </th>
                                        <td>
                                            <input type="text" required class="form-control w-100" id="title"
                                                   name="title"
                                                   placeholder="Nhập tiêu đề" value="{{ old('title') }}">
                                            @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Mô tả
                                        </th>
                                        <td>
                                            <textarea required class="form-control w-100" id="description"
                                                      name="description"
                                                      placeholder="Nhập mô tả">{{ old('description') }}</textarea>
                                            @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Tác giả
                                        </th>
                                        <td>
                                            <input required type="text" class="form-control w-100" id="author"
                                                   name="author"
                                                   placeholder="Nhập tiêu đề"
                                                   value="{{ old('author', auth()->user()->name) }}">
                                            @error('author')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Ảnh
                                        </th>
                                        <td>
                                            <div class="d-flex gap-4">
                                                <div>
                                                    <img
                                                        src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg"
                                                        id="image-preview" class="avatar avatar-xxl">
                                                </div>
                                                <div>
                                                    <input type="file"
                                                           id="file-upload"
                                                           name="image"
                                                           accept="image/*"
                                                           class="form-control w-100 {{ $errors->has('image') ? 'is-invalid': '' }}"/>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Nội dung
                                        </th>
                                        <td>
                                            <textarea required class="form-control w-100" id="content" name="content"
                                                      placeholder="Nhập Nội dung bài viết">{{ old('content') }}</textarea>
                                            @error('content')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Trạng thái
                                        </th>
                                        <td>
                                            <select required name="public" class="form-control w-40">
                                                <option {{ old('public') == 1 ? 'selected' : ''  }} value="1">Công
                                                    khai
                                                </option>
                                                <option {{ old('public') == 0 ? 'selected' : ''  }} value="0">Không công
                                                    khai
                                                </option>
                                            </select>
                                            @error('public')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Ưu tiên hiển thị
                                        </th>
                                        <td>
                                            <input type="text" class="form-control w-40" id="order" name="order"
                                                   placeholder="Nhập giá trị" value="{{ old('order') }}">
                                            @error('tag')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-primary btn-sm w-20 mt-6">Tạo Bài Viết</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(function () {
            $('#file-upload').on('change', function (e) {
                const files = e.target.files;
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files[0]);
                fileReader.onload = function (e) {
                    $('#image-preview').attr('src', e.target.result);
                }
            })
            CKEDITOR.ClassicEditor.create(document.getElementById("content"), {
                toolbar: {
                    items: [
                        'exportPDF','exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                placeholder: 'Welcome to CKEditor 5!',
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },

                removePlugins: [
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    'MathType'
                ]
            });
            CKEDITOR.ClassicEditor.create(document.getElementById("content-slug"), {
                toolbar: {
                    items: [
                        'exportPDF','exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                placeholder: 'Welcome to CKEditor 5!',
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },

                removePlugins: [
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    'MathType'
                ]
            });
        })
    </script>
@endpush

