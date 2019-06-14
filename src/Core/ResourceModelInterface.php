<?php
namespace BT\Core;

interface ResourceModelInterface
{
	function _init($table, $id, $model);
	function save();
	function delete($model);
}