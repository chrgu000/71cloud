//
//  QiNiuPhotoUpLoad.h
//  NewChain
//
//  Created by macmini on 17/9/21.
//  Copyright © 2017年 lixin. All rights reserved.
//

#import "AFNetworking.h"


typedef void (^requestCompletion)(NSURLSessionDataTask *task, NSDictionary *dict, NSError *error);

@interface QiNiuPhotoUpLoad : AFHTTPSessionManager


+ (instancetype)sharedManager;


- (NSURLSessionDataTask *)UserImage:(UIImage *)parameters completion:(requestCompletion)completion;

- (NSURLSessionDataTask *)UpLoadImage:(UIImage *)parameters completion:(requestCompletion)completion;

- (NSURLSessionDataTask *)UpLoadVedio:(NSURL *)parameters completion:(requestCompletion)completion;
@end
