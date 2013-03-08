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
 * Note that QDataTables only works in Javscript mode or Ajax mode. It does not do traditional server posts,
 * so it will only work if javascript is enabled.
 * 
 * @link http://www.datatables.net/
 *
 */
	class QDataTable extends QDataTableBase
	{
	}
?>