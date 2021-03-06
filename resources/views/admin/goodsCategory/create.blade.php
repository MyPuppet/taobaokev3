@extends('admin.layouts.form.index')

@section('title', $title)
@section('headcss')

@stop
@section('content')
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
      <div class="ibox float-e-margins">
          @include('admin.layouts.form._errors')
          @include('admin.layouts.form._tips')
          <div class="ibox-title">
              <h5>增加商品分类</h5>
          </div>
          <div class="ibox-content" style="display: block;">
              <form class="form-horizontal" method="post" action="{{ route('goodsCategorys.store') }}" target="_self" enctype="multipart/form-data">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="col-sm-3 control-label">分类名称：</label>
                          <div class="col-sm-9">
                              <input type="text" name="name" value="{{ old('name') }}" required class="form-control" placeholder="请输入分类的名称">
                          </div>
                      </div>
                      @inject('Options', 'App\Presenters\OptionPresenter')
                      <div class="form-group">
                          <label class="col-sm-3 control-label">所属栏目：</label>
                          <div class="col-sm-9">
                              <select class="form-control" name="parent_id">
                                <option value="0">顶级分类</option>
                                {!! $Options->goodsCategoryOptions($options) !!}
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">排列顺序：</label>
                          <div class="col-sm-9">
                              <input type="number" name="order" required class="form-control" value="0" min="0" max="99" step="1" placeholder="请输入排序">
                              <span class="help-block m-b-none">数字越大排序余额靠前，最大值99</span>

                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">图片：</label>
                          <div class="col-sm-9">
                              <input type="file" required name="image" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">字体图标：</label>
                          <div class="col-sm-9">
                              <input type="text" name="font_icon" value="{{ old('font_icon') }}" class="form-control" placeholder="请输入字体图标的完整标签">
                              <span class="help-block m-b-none">格式：&lt;i class="font-icon font-icon-home"&gt;&lt;/i&gt;</span>

                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">是否展示：</label>
                          <div class="col-sm-9">
                              <label class="radio-inline">
                                  <input type="radio" checked="" value="1" id="optionsRadios1" name="is_shown">是</label>
                              <label class="radio-inline">
                                  <input type="radio" value="0" id="optionsRadios2" name="is_shown">否</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label" for="-NaN">是否推荐：</label>
                          <div class="col-sm-9">
                              <label class="radio-inline" for="-NaN">
                                  <input type="radio"  value="1" id="-NaN" name="is_recommended">是</label>
                              <label class="radio-inline" for="-NaN">
                                  <input type="radio" checked value="0" id="-NaN" name="is_recommended">否</label>
                          </div>
                      </div>
                  </div>
                  {{ csrf_field() }}
                  <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-8">
                          <button class="btn btn-sm btn-primary" type="submit">提 交</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@stop
@section('footJs')

@stop
