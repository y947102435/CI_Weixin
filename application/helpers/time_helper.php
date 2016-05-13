<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 时间戳的函数
 */

// ------------------------------------------------------------------------

if ( ! function_exists('time_line'))
{
	function time_line($time) {
    	$nowTime = time (); 
    	$message = ''; 
    	//一年前
    	if (idate ( 'Y', $nowTime ) != idate ( 'Y', $time )) {
    	    $message = date ( 'Y年m月d日', $time );
    	}
    	else {
        	//同一年
        	$days = idate ( 'z', $nowTime ) - idate ( 'z', $time );
	        switch(true){
	            //一天内
	            case (0 == $days):
	                $seconds = $nowTime - $time;
	                //一小时内
	                if ($seconds < 3600) {
	                    //一分钟内
	                    if ($seconds < 60) {
	                        if (3 > $seconds) {
	                            $message = '刚刚';
	                        } else {
	                            $message = $seconds . '秒前';
	                        }
	                    }else{
	                    	$message = intval ( $seconds / 60 ) . '分钟前';
	                    }
	                }else{
		                $message = idate ( 'H', $nowTime ) - idate ( 'H', $time ) . '小时前';
		            }
		            break;
	                //昨天
	            case (1 == $days):
	                $message = '昨天' . date ( 'H:i', $time );
	                break;
	                //前天
	            case (2 == $days):
	                $message = '前天 ' . date ( 'H:i', $time );
	                break;
	                //7天内
	            case (7 > $days):
	                $message = $days . '天前';
	                break;
	                //超过7天
	            default:
	                $message = date ( 'n月j日 H:i', $time );
	                break;
	        }
    	}
    	return $message;
	}
}

