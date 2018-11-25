//
//  RootViewController.h
//  TTMN
//
//  Created by macmini on 2018/3/28.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface RootViewController : UIViewController

@property (nonatomic ,strong)  UIView  *backView;

@property (nonatomic ,strong)  UIImageView  *backViewImageV;

@property (nonatomic ,strong)  UILabel  *backViewLabel;

- (void)shareActiontheUrl:(NSString *)url;


- (void)viewthephoto:(NSString *)imageStr andtitle:(NSString *)String;

- (void)removeView;


@end
