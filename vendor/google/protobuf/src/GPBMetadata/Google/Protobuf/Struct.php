<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/struct.proto

namespace GPBMetadata\Google\Protobuf;

class Struct
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�
google/protobuf/struct.protogoogle.protobuf"�
Struct3
fields (2#.google.protobuf.Struct.FieldsEntryE
FieldsEntry
key (	%
value (2.google.protobuf.Value:8"�
Value0

null_value (2.google.protobuf.NullValueH 
number_value (H 
string_value (	H 

bool_value (H /
struct_value (2.google.protobuf.StructH 0

list_value (2.google.protobuf.ListValueH B
kind"3
	ListValue&
values (2.google.protobuf.Value*
	NullValue

NULL_VALUE B
com.google.protobufBStructProtoPZ/google.golang.org/protobuf/types/known/structpb��GPB�Google.Protobuf.WellKnownTypesbproto3'
            , true);

        static::$is_initialized = true;
    }
}

