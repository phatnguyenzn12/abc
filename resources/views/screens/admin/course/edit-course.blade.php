@extends('layouts.admin.master')

@section('title', 'Trang danh sách người dùng')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom gutter-b">
                <div class="card-header card-header-tabs-line justify-content-center">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('admin.course.program',$id)}}">
                                    <span class="nav-icon"><i class="fas fa-align-left"></i></span>
                                    <span class="nav-text">Chương Trình Học</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('admin.course.edit',$course->id)}}">
                                    <span class="nav-icon"><i class="far fa-bookmark"></i></span>
                                    <span class="nav-text">Thông Tin Khóa Học</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.course.update',$id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Tiêu đề
                                <span class="text-danger">*</span></label>
                            <input type="text" value="{{ $course->title }}" name="title" class="form-control"
                                placeholder="Nhập tiêu đề">
                        </div>
                        {{-- @error('title')
                                <p class="text-danger">{{ $message }}</p>    
                            @enderror --}}
                        <div class="form-group">
                            <label>Đường dẫn
                                <span class="text-danger">*</span></label>
                            <input value="{{ $course->slug }}" type="text" name="slug" class="form-control"
                                placeholder="Đường dẫn">
                        </div>
                        <div class="form-group">
                            <label>Giá
                                <span class="text-danger">*</span></label>
                            <input value="{{ $course->price }}" type="text" name="price" class="form-control"
                                placeholder="Giá khóa học ">
                        </div>
                        <div class="form-group">
                            <label>Giảm giá
                                <span class="text-danger">*</span></label>
                            <input value="{{ $course->discount }}" type="text" name="discount" class="form-control"
                                placeholder="Video demo">
                        </div>
                        <div class="form-group">
                            <label>Video demo</label>
                            <input type="url" value="{{ $course->video }}" name="video" rows="5"
                                class="form-control" placeholder="nhập đường dẫn video youtube" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="editor" name="content" rows="5" class="form-control">{{ $course->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select name="cate_course_id" id="select2" class="form-control">
                                <option value="">Chọn danh mục</option>
                                <optgroup label="">
                                    @foreach ($cateCourses as $cateCourse)
                                        <option @selected($course->cateCourse->id == $cateCourse->id ? true : false) value="{{ $cateCourse->id }}">{{ $cateCourse->name }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ảnh slide</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input file-image" name="image"
                                    accept=".png, .jpg, .jpeg, .jfif, .webp" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <div class="preview-image new"></div>
                            <div class="preview-image old">
                                <img src="{{ $course->image }}"
                                    style="display:block;margin:10px auto 0;width: auto;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Trạng thái</label>
                            <div class="col-9 col-form-label">
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" value="1" name="status" @checked($course->status == 1 ? true : false)>
                                        <span></span>Công khai</label>
                                    <label class="radio">
                                        <input type="radio" value="0" name="status" @checked($course->status == 0 ? true : false)>
                                        <span></span>Riêng tư</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                            <a href="" class="btn btn-success mr-2">Danh sách slider</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-links')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
@endsection
@push('js-handles')
@endpush
