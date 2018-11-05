<?php
/**
 * Created by PhpStorm.
 * User: quantien
 * Date: 11/1/18
 * Time: 6:11 PM
 */
?>
@extends('admin.index')
@section('content')
    <div class="theme-panel hidden-xs hidden-sm">

    </div>
    <!-- END THEME PANEL -->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('dashboard.index') }}">{{ trans('message.home') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{ route('posts.index') }}">{{ trans('message.post_list_title') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ trans('message.show_title_post') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-list-ul"></i>{{ trans('message.show_title_post') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    {{ trans('message.title_detail') }}
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>{{ trans('message.post_title') }}</th>
                                            <td>{{ $post->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.slug') }}</th>
                                            <td>{{ $post->slug }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.content') }}</th>
                                            <td>{{ $post->content }}</td>
                                        </tr>
                                        @if($post->images->filename != null)
                                            <tr>
                                                <th>{{ trans('message.images') }}</th>
                                                <td>{{ $post->images->filename }}</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                    </div>
                    <div class="col-md-4">
                        <!-- BEGIN CONDENSED TABLE PORTLET-->
                        <div class="portlet box red">
                            <div class="portlet-title">
                                <div class="caption">
                                    {{ trans('message.title_general') }}
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>{{ trans('message.id') }}</th>
                                            <td>{{ $post->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.post_topic') }}</th>
                                            <td>{{ $post->topics->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.post_user') }}</th>
                                            <td>{{ $post->users->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.created_at') }}</th>
                                            <td>{{ $post->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.updated_at') }}</th>
                                            <td>{{ $post->updated_at }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END CONDENSED TABLE PORTLET-->
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection