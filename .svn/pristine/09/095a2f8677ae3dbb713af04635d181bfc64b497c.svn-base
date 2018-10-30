//
//  RootViewController.m
//  TTMN
//
//  Created by macmini on 2018/3/28.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import "RootViewController.h"

@interface RootViewController ()

@end

@implementation RootViewController


- (void)viewDidLoad {
    [super viewDidLoad];
    [self.view setBackgroundColor:COLOR(245, 245, 245)];
    [self.navigationController.navigationBar setTitleTextAttributes:@{NSForegroundColorAttributeName:[UIColor whiteColor],NSFontAttributeName:[UIFont boldSystemFontOfSize:18]}];
    self.navigationItem.leftBarButtonItem = [[UIBarButtonItem alloc] initWithImage:[[UIImage imageNamed:@"back"] imageWithRenderingMode:UIImageRenderingModeAlwaysOriginal] style:UIBarButtonItemStylePlain target:self action:@selector(back_action)];
    
    self.navigationController.interactivePopGestureRecognizer.delegate = (id)self;
    
    self.edgesForExtendedLayout = UIRectEdgeNone;
}

- (void)viewthephoto:(NSString *)imageStr andtitle:(NSString *)String{
    
    self.backView = [[UIView alloc] initWithFrame:CGRectMake(50, 100, SCREEN_W -100, 210)];
    self.backView.userInteractionEnabled =YES;
    [self.view addSubview:self.backView];
    
    self.backViewImageV = [[UIImageView alloc] initWithFrame:CGRectMake((SCREEN_W -100)/2 -75, 0, 150, 150)];
    self.backViewImageV.contentMode = UIViewContentModeScaleAspectFill;
    [self.backView addSubview:self.backViewImageV];
    
    self.backViewLabel = [[UILabel alloc] initWithFrame:CGRectMake(0, CGRectGetMaxY(self.backViewImageV.frame) +20, SCREEN_W - 100, 35)];
    self.backViewLabel.font = Font(16);
    self.backViewLabel.textAlignment = 1;
    self.backViewLabel.numberOfLines = 2;
    self.backViewLabel.textColor = UIColorFromRGBA(0x000000, 1);
    [self.backView addSubview:self.backViewLabel];
    
    self.backViewImageV.image = [UIImage imageNamed:imageStr];
    self.backViewLabel.text = String;
   
}

- (void)removeView{
    [self.backView removeFromSuperview];
    self.backView = nil;
}


-(void)back_action
{
    NSArray *viewcontrollers = self.navigationController.viewControllers;
    if (viewcontrollers.count>1) {
        if ([viewcontrollers objectAtIndex:viewcontrollers.count-1] == self) {
            //push方式
            [self.navigationController popViewControllerAnimated:NO];
        }
    } else {
        //present方式
        [self.navigationController dismissViewControllerAnimated:NO completion:nil];
    }
}


- (void)dealloc
{
    NSLog(@"%@--->>>已销毁",NSStringFromClass([self class]));
}


//- (void)shareActiontheUrl:(NSString *)url{
//
//        [UMSocialShareUIConfig shareInstance].shareTitleViewConfig.shareTitleViewFont = [UIFont systemFontOfSize:14];
//        [UMSocialShareUIConfig shareInstance].sharePageGroupViewConfig.sharePageGroupViewPostionType = UMSocialSharePageGroupViewPositionType_Bottom;
//        [UMSocialShareUIConfig shareInstance].sharePageScrollViewConfig.shareScrollViewPageItemStyleType = UMSocialPlatformItemViewBackgroudType_None;
//        [UMSocialShareUIConfig shareInstance].sharePageScrollViewConfig.shareScrollViewPageMaxRowCountForPortraitAndBottom = 1;
//        [UMSocialShareUIConfig shareInstance].shareTitleViewConfig. shareTitleViewTitleString = @"Please select the sharing platform";
//
//        [UMSocialShareUIConfig
//         shareInstance].shareCancelControlConfig.shareCancelControlText = @"cancel";
//        [UMSocialShareUIConfig
//         shareInstance].shareCancelControlConfig.shareCancelControlTextColor= [UIColor redColor];
//
//        [UMSocialUIManager setPreDefinePlatforms:@[@(UMSocialPlatformType_Twitter),@(UMSocialPlatformType_Linkedin)]];
//
//        [UMSocialUIManager showShareMenuViewInWindowWithPlatformSelectionBlock:^(UMSocialPlatformType platformType, NSDictionary *userInfo) {
//
//                //创建分享消息对象
//                UMSocialMessageObject *messageObject = [UMSocialMessageObject messageObject];
//
//                //图片
//                NSString* thumbURL =   nil;
//
//                UMShareWebpageObject *shareObject = [UMShareWebpageObject shareObjectWithTitle:@"CHTC" descr:@"share" thumImage:thumbURL];
//                //设置网页地址
//                shareObject.webpageUrl = url;
//                //分享消息对象设置分享内容对象
//                messageObject.shareObject = shareObject;
//                //调用分享接口
//                [[UMSocialManager defaultManager] shareToPlatform:platformType messageObject:messageObject currentViewController:self completion:^(id data, NSError *error) {
//                    if (error) {
//                        UMSocialLogInfo(@"************Share fail with error %@*********",error);
//                        NSLog(@"%@",error);
//                    }else{
//                        if ([data isKindOfClass:[UMSocialShareResponse class]]) {
//                            UMSocialShareResponse *resp = data;
//                            //分享结果消息
//                            UMSocialLogInfo(@"response message is %@",resp.message);
//                            //第三方原始返回的数据
//                            UMSocialLogInfo(@"response originalResponse data is %@",resp.originalResponse);
//                        }else{
//                            UMSocialLogInfo(@"response data is %@",data);
//                        }
//                    }
//                }];
//        }];
//
//
//}

@end
