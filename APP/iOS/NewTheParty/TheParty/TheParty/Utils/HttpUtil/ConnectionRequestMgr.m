//
//  ConnectionRequestMgr.m
//  TTMN
//
//  Created by macmini on 2018/4/21.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import "ConnectionRequestMgr.h"
#import <CommonCrypto/CommonDigest.h>

static AFHTTPSessionManager* sessionManager;
@implementation ConnectionRequestMgr

+ (void)PostSessionWithUrl:(NSString *)url parameter:(NSString *)parameter  successBlock:(SuccessBlock)success failBlock:(FailBlock)failure
{
    if (url == nil) {
        failure(@"URL为空,请求失败!");
        return;
    }
    NSURL *requestUrl = [NSURL URLWithString:formatString(@"%@%@",HTTPURL,url)];
    NSMutableURLRequest *request = [[NSMutableURLRequest alloc] initWithURL:requestUrl cachePolicy:NSURLRequestUseProtocolCachePolicy timeoutInterval:50];
    NSData *paraData = [formatString(@"%@", parameter) dataUsingEncoding:NSUTF8StringEncoding];
    [request setHTTPBody:paraData];
    [request setHTTPMethod:@"POST"];
    NSLog(@"url--%@",requestUrl);
    [[[NSURLSession sharedSession] dataTaskWithRequest:request completionHandler:^(NSData * _Nullable data, NSURLResponse * _Nullable response, NSError * _Nullable error) {
        // 解析json
        NSError *jsonError = nil;
        NSString *result =[[ NSString alloc] initWithData:data encoding:NSUTF8StringEncoding];
        NSLog(@"%@",result);
        NSDictionary *dict = [NSJSONSerialization JSONObjectWithData:data options:NSJSONReadingMutableContainers error:&jsonError];
        if (!jsonError) { // 是json
            if (dict) {
                dispatch_async(dispatch_get_main_queue(), ^{
                    success(dict);
                });
            }
        }
        else // json解析失败
        {
                dispatch_async(dispatch_get_main_queue(), ^{
                    failure(@"数据解析失败");
                });
        }
    }] resume];
}

+ (void)GetSessionWithUrl:(NSString *)url parameter:(NSString *)parameter  successBlock:(SuccessBlock)success failBlock:(FailBlock)failure{
    if (url == nil) {
        failure(@"URL为空,请求失败!");
        return;
    }
    ThePartySingTon *instance = [ThePartySingTon SharedInstance];
    NSString *str;
    if (instance.user.Userid.length == 0) {
        const char* input = [formatString(@"%@",instance.user.token.length == 0 ? @"71clouddangjiang" : instance.user.token) UTF8String];
        unsigned char result[CC_MD5_DIGEST_LENGTH];
        CC_MD5(input, (CC_LONG)strlen(input), result);
        NSMutableString *digest = [NSMutableString stringWithCapacity:CC_MD5_DIGEST_LENGTH * 2];
        for (NSInteger i = 0; i < CC_MD5_DIGEST_LENGTH; i++) {
            [digest appendFormat:@"%02x", result[i]];
        }
        str = formatString(@"%@%@?secret=%@%@",HTTPURL,url,digest,parameter != nil ? parameter : @"");
    }else{
        //要进行UTF8的转码
        long long time = [[NSDate date] timeIntervalSince1970] * 1000;
        NSString *currentTime = formatString(@"%lld",time);
        NSString *uid = [instance.user.Userid length] == 0 ? @"0":instance.user.Userid;
        const char* input = [formatString(@"%@%@%@",instance.user.token.length == 0 ? @"71clouddangjiang" : instance.user.token,currentTime,uid) UTF8String];
        unsigned char result[CC_MD5_DIGEST_LENGTH];
        CC_MD5(input, (CC_LONG)strlen(input), result);
        NSMutableString *digest = [NSMutableString stringWithCapacity:CC_MD5_DIGEST_LENGTH * 2];
        for (NSInteger i = 0; i < CC_MD5_DIGEST_LENGTH; i++) {
            [digest appendFormat:@"%02x", result[i]];
        }
        str = formatString(@"%@%@?uid=%@&time=%@&secret=%@%@",HTTPURL,url,uid,currentTime,digest,parameter != nil ? parameter : @"");
        
    }
    NSURL *requestUrl = [NSURL URLWithString:[str stringByAddingPercentEscapesUsingEncoding:NSUTF8StringEncoding]];
    NSMutableURLRequest *request = [[NSMutableURLRequest alloc] initWithURL:requestUrl cachePolicy:NSURLRequestUseProtocolCachePolicy timeoutInterval:10];
    NSLog(@"url--%@",requestUrl);
    [[[NSURLSession sharedSession] dataTaskWithRequest:request completionHandler:^(NSData * _Nullable data, NSURLResponse * _Nullable response, NSError * _Nullable error) {
        if (!error) { // 请求成功
            // 解析json
            NSError *jsonError = nil;
            NSDictionary *dict = [NSJSONSerialization JSONObjectWithData:data options:NSJSONReadingMutableContainers error:&jsonError];
            if (!jsonError) { // 是json
                if (dict) {
                    dispatch_async(dispatch_get_main_queue(), ^{
                        if ([dict[@"code"] integerValue] == 1) {
                            success(dict);
                        }
//                        else if ([dict[@"data"] isEqual:[NSNull null]]){
//                            [dict setValue:@"" forKey:@"data"];
//                            success(dict);
//                        }
                        else{
                            NSLog(@"%@",dict[@"msg"]);
                            success(dict);
                        }
                    });
                }
            }
            else // json解析失败
            {
                dispatch_async(dispatch_get_main_queue(), ^{
                    failure(@"数据解析失败");
                });
            }
        }
        else // 请求失败
        {
            dispatch_async(dispatch_get_main_queue(), ^{
                
                NSDictionary *userInfo = error.userInfo;
                failure(@"网络请求失败！");
                // NSLocalizedDescription
//                failure([userInfo stringForKey:@"NSLocalizedDescription"]);
            });
        }
    }] resume];
}


+ (void)POSTSessionWithUrl:(NSString *)url parameter:(id )parameter successBlock:(SuccessBlock)success failBlock:(FailBlock)failure{
    if (url == nil) {
        failure(@"URL为空,请求失败!");
        return;
    }
    NSString *requestUrl = [NSString stringWithFormat:@"%@%@",HTTPURL,url];
    NSMutableDictionary *Dictionary = [[NSMutableDictionary alloc] init];
    ThePartySingTon *instance = [ThePartySingTon SharedInstance];
    if (instance.user.Userid.length == 0) {
        const char* input = [formatString(@"%@",instance.user.token.length == 0 ? @"71clouddangjiang" : instance.user.token) UTF8String];
        unsigned char result[CC_MD5_DIGEST_LENGTH];
        CC_MD5(input, (CC_LONG)strlen(input), result);
        NSMutableString *digest = [NSMutableString stringWithCapacity:CC_MD5_DIGEST_LENGTH * 2];
        for (NSInteger i = 0; i < CC_MD5_DIGEST_LENGTH; i++) {
            [digest appendFormat:@"%02x", result[i]];
        }
        [Dictionary addEntriesFromDictionary:parameter];
        [Dictionary setObject:digest forKey:@"secret"];
        
    }else{
        //要进行UTF8的转码
        long long time = [[NSDate date] timeIntervalSince1970] * 1000;
        NSString *currentTime = formatString(@"%lld",time);
        NSString *uid = [instance.user.Userid length] == 0 ? @"0":instance.user.Userid;
        const char* input = [formatString(@"%@%@%@",uid,currentTime,instance.user.token.length == 0 ? @"71clouddangjiang" : instance.user.token) UTF8String];
        unsigned char result[CC_MD5_DIGEST_LENGTH];
        CC_MD5(input, (CC_LONG)strlen(input), result);
        NSMutableString *digest = [NSMutableString stringWithCapacity:CC_MD5_DIGEST_LENGTH * 2];
        for (NSInteger i = 0; i < CC_MD5_DIGEST_LENGTH; i++) {
            [digest appendFormat:@"%02x", result[i]];
        }
        [Dictionary addEntriesFromDictionary:parameter];
        [Dictionary setObject:uid forKey:@"uid"];
        [Dictionary setObject:currentTime forKey:@"time"];
        [Dictionary setObject:digest forKey:@"secret"];
        
    }
    AFHTTPSessionManager *manager = [AFHTTPSessionManager manager];
    manager.requestSerializer.timeoutInterval = 10.f;
    manager.responseSerializer = [AFJSONResponseSerializer serializer];
    manager.requestSerializer = [AFJSONRequestSerializer serializer];
    manager.responseSerializer.acceptableContentTypes = [NSSet setWithObjects:@"application/json",@"text/json", @"text/plain", @"text/html",@"application/text", nil];
    [manager.requestSerializer setValue:@"application/json" forHTTPHeaderField:@"Content-Type"];
    [manager.requestSerializer setValue:@"application/json" forHTTPHeaderField:@"Accept"];
    [manager POST:requestUrl parameters:Dictionary progress:nil success:^(NSURLSessionDataTask * _Nonnull task, id  _Nullable responseObject) {
        NSLog(@"%@",responseObject);
        if (responseObject) {
            NSDictionary *dict =responseObject;
            if ([dict[@"code"] integerValue] == 1) {
                success(dict);
            }else{
                NSLog(@"%@",dict[@"msg"]);
                failure(dict[@"msg"]);
                [self showError:dict[@"msg"]];
            }
        }else{
            failure(@"请求失败！");
        }
    } failure:^(NSURLSessionDataTask * _Nullable task, NSError * _Nonnull error) {
       failure(@"网络请求失败！");
    }];
}

+ (void)cancelAllRequest
{
    [sessionManager.operationQueue cancelAllOperations];
}

+ (void)showSuccess:(NSString *)title
{
    UIView *view = [[UIApplication sharedApplication].delegate window];
    [MBProgressHUD hideAllHUDsForView:view animated:YES];
    MBProgressHUD *hud = [MBProgressHUD showHUDAddedTo:view animated:YES];
    hud.color = [UIColorFromRGBA(0x000000, 1) colorWithAlphaComponent:0.8];
    hud.mode = MBProgressHUDModeCustomView;
    hud.customView = [[UIImageView alloc] initWithImage:[UIImage imageWithContentsOfFile:[self pathOfIsSuccess:YES]]];
    hud.labelText = title;
    [hud hide:YES afterDelay:1.0];
}

+ (NSString *)pathOfIsSuccess:(BOOL)isSuccess
{
    
    NSString *imageName = isSuccess? @"success-white" : @"error-white";

    NSString *path = [[[NSBundle mainBundle] pathForResource:@"DKExtensions" ofType:@"bundle"] stringByAppendingPathComponent:[NSString stringWithFormat:@"DKProgressHUD.bundle/%@",imageName]];
    if (!path) {
        path = [[[NSBundle mainBundle] pathForResource:@"DKProgressHUD" ofType:@"bundle"] stringByAppendingPathComponent:imageName];
    }
    return path;
}


#pragma mark  根据图片大小压缩文件
+ (UIImage *)doWithPhotoDate:(UIImage *)image
{
    NSData *reData;
    CGFloat length = [UIImagePNGRepresentation(image)length]/1024;
    length = length /1024;
    // 图片压缩规则：小于1M 70% 1-2M 50% 2-3M 30% 超过3M 20%
    if (length < 1) {
        reData = UIImageJPEGRepresentation(image,0.7);
    }else if (length > 1 && length < 2){
        reData = UIImageJPEGRepresentation(image, 0.5);
    }else if (length >2 && length < 3){
        reData = UIImageJPEGRepresentation(image, 0.3);
    }else{
        reData = UIImageJPEGRepresentation(image, 0.2);
    }
    UIImage *imageV = [UIImage imageWithData:reData];
    return imageV;
}

+  (UIImage *)getImageForSmallSize:(CGSize)size andOrigalImage:(UIImage *)oriImage{
    CGSize oriSize = oriImage.size;
    double compressValue = (double)size.width/(double)oriSize.width;
    NSData  *data = UIImageJPEGRepresentation(oriImage, 1);
    if(compressValue < 1 ){
        data = UIImageJPEGRepresentation(oriImage, compressValue);
    }
    UIImage *retImage = [UIImage imageWithData:data];
    return [self imageWithImage:retImage scaledToSize:size];
}

+ (UIImage *)getImageCompressBy:(float)compress andOrigalImage:(UIImage *)oriImage{
    CGSize oriSize = oriImage.size;
    CGSize toSize = CGSizeMake(oriSize.width, oriSize.height);
    NSData  *data = UIImageJPEGRepresentation(oriImage, compress);
    UIImage *retImage = [UIImage imageWithData:data];
    return [self imageWithImage:retImage scaledToSize:toSize];
}

+ (UIImage *)getCompressImageByOrigalImage:(UIImage *)origalImage{
    return [UIImage imageWithData:[self dataFromImageForUpload:origalImage]];
}

+ (NSData *)dataFromImageForUpload:(UIImage *)image{
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
+ (UIImage *)imageWithImage:(UIImage *)image scaledToSize:(CGSize)newSize{
    UIGraphicsBeginImageContext(newSize);
    [image drawInRect:CGRectMake(0, 0, newSize.width, newSize.height)];
    UIImage *newImage = UIGraphicsGetImageFromCurrentImageContext();
    UIGraphicsEndImageContext();
    NSData *imgData = UIImageJPEGRepresentation(newImage, 1);
    NSLog(@"%lu",(unsigned long)[imgData length]);
    return newImage;
}

@end
