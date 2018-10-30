//
//  NSDate+Convert.h
//
//  Created by Kyo on 5/15/14.
//  Copyright (c) 2014 Kyo. All rights reserved.
//


static NSString * const kDateFormatISO8601 = @"yyyy-MM-dd'T'HH:mm:ssZ";
static NSString * const kDateFormat_yyyy_M_d_slash = @"yyyy/M/d";
static NSString * const kDateFormat_yyyy_MM_dd = @"yyyy-MM-dd";
static NSString * const kDateFormat_yyyy_MM_ddTHH_mm_ss = @"yyyy-MM-dd'T'HH:mm:ss";
static NSString * const kDateFormat_yyyy_MM_dd_HH_mm = @"yyyy-MM-dd HH:mm";
static NSString * const kDateFormat_yyyy_MM_dd_H_mm = @"yyyy-MM-dd H:mm";
static NSString * const kTimeFormat_H_mm = @"H:mm";
static NSString * const KtimeFormat_yyyy_MM_ddTHH_mm_ss_SSS = @"yyyy-MM-dd'T'HH:mm:ss.SSS";
//Date format for date Display
static NSString * const kDateFormat_yyyy_M_d_HH_mm_Chinese = @"yyyy年M月d日 HH:mm";
static NSString * const kDateFormat_yyyy_M_d_Chinese = @"yyyy年M月d日";
static NSString * const kDateFormat_M_d = @"M-d";
static NSString * const kTimeFormat_HH_mm = @"HH:mm";
static NSString * const kTimeFormat_MM_DD_HH_mm = @"MM-dd  HH:mm";
static NSString * const kDateFormat_yyyy_MM_dd_HH_mm_ss=@"yyyy-MM-dd HH:mm:ss";

#import <Foundation/Foundation.h>

@interface NSDate (Convert)

- (NSString *)strLongLongDate;  //把日期转为字符串格式    yyyy-MM-dd HH:mm:ss
- (NSString *)strDatePoint;//把日期转为字符串格式  2014.11.20
- (NSString *)strDate;  //把日期转为字符串格式  2014-11-20
- (NSString *)strChineseDate;   //把日期转为字符串格式    yyyy年MM月dd日
- (NSString *)strChineseDateWithoutFillZero;   //把日期转为字符串格式    yyyy年M月d日
- (NSString *)strLongDate;  //把日期转为字符串格式    yyyy-MM-dd HH:mm:ss
- (NSString *)strDateWithFormat:(NSString *)format; //根据传入格式返回日期字符串
//根据传入的n天返回一个距离当前n天的NSDate
- (NSDate *)currentIntervalDateWithDay:(NSInteger)intervalDay;
//字符串日期转为nsdate，输入的日期字符串形如：@"1992-05-21 13:08"
+ (NSDate *)dateFromString:(NSString *)dateString;
//字符串日期转为nsdate，输入的日期字符串形如：@"1992-05-21 13:08:00"
+ (NSDate *)dateFromStringWithTime:(NSString *)dateString;
//字符串日期转为nsdate，输入的日期字符串形如：@"1992年05月21日"
+ (NSDate *)dateFromStringCH:(NSString *)dateString;
//字符串日期转为，输入的日期字符串形如：@"1992-05-21"
+ (NSDate *)dateFromStringWithoutTime:(NSString *)dateString;
///判断传入的两个nadate是否处于同一天
+ (BOOL)isTheSameDayWithDay1:(NSDate *)day1 day2:(NSDate *)day2;
//日期转换时间戳
+ (NSTimeInterval)dateConvertSecond_yyyy_MM_dd_HH_mm_ss:(NSString *)datetime;

/**
 根据时间戳字符串返回相应的yyyy-MM-dd HH:mm
 
 @param timeString 时间戳
 @return 转换后的字符串
 */
+ (NSString *)timeWithTimeIntervalString:(NSString *)timeString;

/**
 @param timestamp 当前剩余的秒数
 @param orderstatus 订单状态
 @return 返回相应的字符串
 */
+ (NSString *)countDown:(NSInteger)timestamp orderstatus:(NSInteger)orderstatus;


@end
