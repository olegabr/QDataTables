<?php
/**
 * QDataTables is an interface to the DataTables jquery control. It is based on a QSimpleTable, and provides
 * a number of unique styling options that can be very difficult to implement, including:
 * - Javascript only table handling if wanted, such that the entire table can be searched, sorted, paged
 *   and scrolled all in javascript
 * - Server-side processing through ajax, that can do similar things to data coming from an ajax source. 
 * - Fixed column and fixed header options that allow you to scroll data while keeping the header on top
 * 	 and possibly some columns on the left and right, as well as a footer, fixed in place, similar to Excel's
 *   ability to freeze panes.
 * 
 * Notes: 
 * QDataTables only works in Javscript mode or Ajax mode. It does not do traditional server posts,
 * so it will only work if javascript is enabled.
 * 
 * When QDatatables delivers data to the javascript control via ajax, it delivers the data only, and
 * not the tags around the data. If you have data specific parameters you are injecting into the tags,
 * like by using GetCellParams, GetCellClass, etc. you will need to deal with that by creating javascript
 * functions and assigning them to callback functions that are part of datatables. The only direct support
 * for extra parameter information is for the row class and row id.
 * 
 * One strategy for sending additional data to influence the display is to:
 * 1) turn on UseMData,
 * 2) Add additional data to the aaData array that is returned to the javascript, and then 
 * 3) Create a javascript function  and assign it to fnRowCallback to modify the DOM before 
 *    final drawing. fnRowCallback will be given the data returned by step #2.
 *  
 * 
 * @link http://www.datatables.net/
 *
 */
	class QDataTable extends QDataTableBase
	{
	}
?>