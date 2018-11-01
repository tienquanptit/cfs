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
                <a href="{{ route('confessions.index') }}">{{ trans('message.cfs_list_title') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ trans('message.show_title') }}</span>
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
                        <i class="fa fa-list-ul"></i>{{ trans('message.show_title') }}
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
                                            <th>{{ trans('message.confession_title') }}</th>
                                            <td>{{ $confession->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.confession_body') }}</th>
                                            <td>{{ $confession->body }}</td>
                                        </tr>
                                        @if($confession->images != null)
                                            <tr>
                                                <th>{{ trans('message.confession_images') }}</th>
                                                <td>{{ $confession->images }}</td>
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
                                            <th>{{ trans('message.confession_id') }}</th>
                                            <td>{{ $confession->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('message.confession_created_at') }}</th>
                                            <td>{{ $confession->created_at }}</td>
                                        </tr>
                                        @if($confession->deleted_at !=null)
                                            <tr>
                                                <th>{{ trans('message.confession_deleted_at') }}</th>
                                                <td>{{ $confession->deleted_at }}</td>
                                            </tr>
                                        @endif
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