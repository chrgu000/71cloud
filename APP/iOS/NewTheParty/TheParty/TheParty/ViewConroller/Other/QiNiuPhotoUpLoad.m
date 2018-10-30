//
//  QiNiuPhotoUpLoad.m
//  NewChain
//
//  Created by macmini on 17/9/21.
//  Copyright © 2017年 lixin. All rights reserved.
//

#import "QiNiuPhotoUpLoad.h"
#import "QiniuSDK.h"
#import <CommonCrypto/CommonCrypto.h>
static QiNiuPhotoUpLoad *_manager = nil;
@implementation QiNiuPhotoUpLoad

+ (instancetype)sharedManager{
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        _manager = [[QiNiuPhotoUpLoad alloc]init];
        _manager.securityPolicy = [AFSecurityPolicy policyWithPinningMode:AFSSLPinningModeNone];
        
        _manager.requestSerializer  = [AFJSONRequestSerializer serializer];
        
        _manager.responseSerializer = [AFJSONResponseSerializer serializer];
        
        _manager.responseSerializer.acceptableContentTypes = [NSSet setWithObjects:@"application/json", @"text/json", @"text/javascript",@"text/html", @"text/plain",@"application/atom+xml",@"application/xml",@"text/xml",@"application/octet-stream",@"multipart/mixed", nil];
    });
    return _manager;
}

//- (NSURLSessionDataTask *)image:(UIImage *)parameters completion:(requestCompletion)completion{

    
//     NSData *data =[self dataFromImageForUpload:parameters];
//    NSString *urlStr = [NSString stringWithFormat:@"%@%@",SP_SERVER_ROOT,@"api.php/qiniu/token"];
//    NCSingTon *instance = [NCSingTon SharedInstance];
//
//    long long time = [[NSDate date] timeIntervalSince1970] * 1000;
//    NSString *currentTime = formatString(@"%lld",time);
//    NSString *uid = [instance.user.Userid length] == 0 ? @"0":instance.user.Userid;
//
//    const char* input = [formatString(@"%@%@%@",currentTime,instance.user.UserToken.length == 0 ? @"adfad30bcf04" : instance.user.UserToken,uid) UTF8String];
//    unsigned char Result[CC_MD5_DIGEST_LENGTH];
//    CC_MD5(input, (CC_LONG)strlen(input), Result);
//    NSMutableString *digest = [NSMutableString stringWithCapacity:CC_MD5_DIGEST_LENGTH * 2];
//    for (NSInteger i = 0; i < CC_MD5_DIGEST_LENGTH; i++) {
//        [digest appendFormat:@"%02x", Result[i]];
//    }
//    NSMutableDictionary *paraDic = [[NSMutableDictionary alloc] init];
//    NSDictionary*dict = @{@"uid":uid,@"time":currentTime,@"secret":digest};
//    [paraDic addEntriesFromDictionary:dict];

    
//
//    NSURLSessionDataTask *task = [self GET:urlStr parameters:paraDic progress:^(NSProgress * _Nonnull downloadProgress) {
//
//    } success:^(NSURLSessionDataTask * _Nonnull task, id  _Nullable responseObject) {
//        NSString *token;
//        if ([responseObject[@"code"] isEqualToString:@"0000"]) {
//            token = formatString(@"%@",responseObject[@"data"][@"token"]);
//        }else{
//            return;
//        }
//        QNUploadManager *upManager = [[QNUploadManager alloc] init];
//        [upManager putData:data key:[NSString stringWithFormat:@"%@%@",instance.user.Userid,currentTime] token:token complete:^(QNResponseInfo *info, NSString *key, NSDictionary *resp) {
//            if (resp != nil) {
//                NSString *respStr = [NSString stringWithFormat:@"http://h5hub.co-links.com/%@",resp[@"key"]];
//                NSString *url = @"api.php/personal/edit_message";
//                NSDictionary *biz = @{@"type":@"1",@"avator":respStr};
//                [[NetWorkingUtil getNetWorkingUtil] requestZcwl4MethodUrl:url parameters:biz result:^(id objs, int status, NSString *msg) {
//                    if (status != -1) {
//                        if ([objs[@"code"] isEqualToString:@"0000"]) {
//                            completion(task,@{@"photo":respStr},nil);
//                        }else{
//
//
//                        }
//
//                    }else{
//
//                    }
//                }];
//            }else{
//                [MBProgressHUD showError:@"请求失败"];
//                return;
//            }
//        } option:nil];
//
//
//    } failure:^(NSURLSessionDataTask * _Nullable task, NSError * _Nonnull error) {
//        [MBProgressHUD showError:@"请求失败"];
//    }];
//    return  task;
//}

- (NSURLSessionDataTask *)UpLoadImage:(UIImage *)parameters completion:(requestCompletion)completion{

    
    NSData *data =[self dataFromImageForUpload:parameters];
    NSString *urlStr = [NSString stringWithFormat:@"%@%@",HTTPURL,@"home/Qiniu/upload"];
//    NCSingTon *instance = [NCSingTon SharedInstance];
//
//    long long time = [[NSDate date] timeIntervalSince1970] * 1000;
//    NSString *currentTime = formatString(@"%lld",time);
//    NSString *uid = [instance.user.Userid length] == 0 ? @"0":instance.user.Userid;
//
//    const char* input = [formatString(@"%@%@%@",currentTime,instance.user.UserToken.length == 0 ? @"adfad30bcf04" : instance.user.UserToken,uid) UTF8String];
//    unsigned char Result[CC_MD5_DIGEST_LENGTH];
//    CC_MD5(input, (CC_LONG)strlen(input), Result);
//    NSMutableString *digest = [NSMutableString stringWithCapacity:CC_MD5_DIGEST_LENGTH * 2];
//    for (NSInteger i = 0; i < CC_MD5_DIGEST_LENGTH; i++) {
//        [digest appendFormat:@"%02x", Result[i]];
//    }
//    NSMutableDictionary *paraDic = [[NSMutableDictionary alloc] init];
//    NSDictionary*dict = @{@"uid":uid,@"time":currentTime,@"secret":digest};
//    [paraDic addEntriesFromDictionary:dict];
    
    NSURLSessionDataTask *task = [self GET:urlStr parameters:nil progress:^(NSProgress * _Nonnull downloadProgress) {
        
    } success:^(NSURLSessionDataTask * _Nonnull task, id  _Nullable responseObject) {
        NSString *token;
        if ([responseObject[@"code"] integerValue] == 1) {
            token = formatString(@"%@",responseObject[@"token"]);
            if (token.length >4) {
                token = formatString(@"%@",responseObject[@"token"]);
            }else{
                token = formatString(@"%@%@",responseObject[@"token"],responseObject[@"code"]);
            }
        }else{
            return;
        }
        QNUploadManager *upManager = [[QNUploadManager alloc] init];
        [upManager putData:data key:nil token:token complete:^(QNResponseInfo *info, NSString *key, NSDictionary *resp) {
            if (resp != nil) {
                 NSString *respStr = [NSString stringWithFormat:@"http://pft5fctao.bkt.clouddn.com/%@",resp[@"key"]];
                completion(task,@{@"photo":respStr},nil);
            }else{
                [MBProgressHUD showError:@"请求失败"];
                return;
            }
        } option:nil];
    } failure:^(NSURLSessionDataTask * _Nullable task, NSError * _Nonnull error) {
        [MBProgressHUD showError:@"请求失败"];
    
    }];
    return  task;
}

- (NSURLSessionDataTask *)UpLoadVedio:(NSURL *)parameters completion:(requestCompletion)completion{
    
    NSData *data =[NSData dataWithContentsOfURL:parameters];
    
    NSString *urlStr = [NSString stringWithFormat:@"%@%@",HTTPURL,@"home/Qiniu/upload"];
    
    NSURLSessionDataTask *task = [self GET:urlStr parameters:nil progress:^(NSProgress * _Nonnull downloadProgress) {
        
    } success:^(NSURLSessionDataTask * _Nonnull task, id  _Nullable responseObject) {
        NSString *token;
        if ([responseObject[@"code"] integerValue] == 1) {
            token = formatString(@"%@",responseObject[@"token"]);
        }else{
            return;
        }
        
        QNUploadManager *upManager = [[QNUploadManager alloc] init];
        [upManager putData:data key:nil token:token complete:^(QNResponseInfo *info, NSString *key, NSDictionary *resp) {
            if (resp != nil) {
                NSString *respStr = [NSString stringWithFormat:@"http://pft5fctao.bkt.clouddn.com/%@",resp[@"key"]];
                completion(task,@{@"photo":respStr},nil);
            }else{
                [MBProgressHUD showError:@"请求失败"];
                return;
            }
        } option:nil];
    } failure:^(NSURLSessionDataTask * _Nullable task, NSError * _Nonnull error) {
        [MBProgressHUD showError:@"请求失败"];
    }];
    return  task;
    
}


#pragma mark  根据图片大小压缩文件
-(UIImage *)doWithPhotoDate:(UIImage *)image
{
    NSData *reData;
    CGFloat length = [UIImagePNGRepresentation(image)length]/1024;
    
    length = length /1024;
    // 图片压缩规则：小于1M 70% 1-2M 50% 2-3M 30% 超过3M 20%
    if (length < 1) {
        reData = UIImageJPEGRepresentation(image,0.7);
    }
    else if (length > 1 && length < 2)
    {
        reData = UIImageJPEGRepresentation(image, 0.5);
    }
    else if (length >2 && length < 3)
    {
        reData = UIImageJPEGRepresentation(image, 0.3);
    }
    else
    {
        reData = UIImageJPEGRepresentation(image, 0.2);
    }
    UIImage * imageV = [UIImage imageWithData:reData];
    return imageV;
}

- (UIImage *)getImageForSmallSize:(CGSize)size andOrigalImage:(UIImage *)oriImage{
    CGSize oriSize = oriImage.size;
    double compressValue = (double)size.width/(double)oriSize.width;
    NSData  *data = UIImageJPEGRepresentation(oriImage, 1);
    if(compressValue < 1 ){
        data = UIImageJPEGRepresentation(oriImage, compressValue);
    }
    
    UIImage *retImage = [UIImage imageWithData:data];
    
    return [self imageWithImage:retImage scaledToSize:size];
}

-(UIImage *)getImageCompressBy:(float)compress andOrigalImage:(UIImage *)oriImage{
    CGSize oriSize = oriImage.size;
    CGSize toSize = CGSizeMake(oriSize.width, oriSize.height);
    NSData  *data = UIImageJPEGRepresentation(oriImage, compress);
    UIImage *retImage = [UIImage imageWithData:data];
    
    return [self imageWithImage:retImage scaledToSize:toSize];
}

-(UIImage *)getCompressImageByOrigalImage:(UIImage *)origalImage{
    return [UIImage imageWithData:[self dataFromImageForUpload:origalImage]];
}

-(NSData *)dataFromImageForUpload:(UIImage *)image{
    NSData  *data = UIImageJPEGRepresentation(image, 1);
    double compressQuality = (double)153600/(CGFloat)data.length;
    if(compressQuality < 1 ){
        data = UIImageJPEGRepresentation(image, compressQuality);
    }
    
    CGFloat screenWidth = 1080;
    CGFloat imageWidth = MIN(image.size.width, image.size.height);
    CGFloat ratio = imageWidth / screenWidth;
    
    UIImage *dealImage = [UIImage imageWithData:data];
    if(ratio > 1){
        CGSize newSize = CGSizeMake(image.size.width / ratio, image.size.height / ratio);
        dealImage = [self imageWithImage:dealImage scaledToSize:newSize];
    }
    
    return UIImageJPEGRepresentation(dealImage, compressQuality>1?1:compressQuality);
}

//缩放图片
-(UIImage *)imageWithImage:(UIImage *)image scaledToSize:(CGSize)newSize{
    UIGraphicsBeginImageContext(newSize);
    [image drawInRect:CGRectMake(0, 0, newSize.width, newSize.height)];
    UIImage *newImage = UIGraphicsGetImageFromCurrentImageContext();
    UIGraphicsEndImageContext();
    
    NSData *imgData = UIImageJPEGRepresentation(newImage, 1);
    NSLog(@"%lu",(unsigned long)[imgData length]);
    
    return newImage;
}
@end
