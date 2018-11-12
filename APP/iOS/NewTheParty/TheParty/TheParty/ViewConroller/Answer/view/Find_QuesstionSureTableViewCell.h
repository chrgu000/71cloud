//
//  Find_QuesstionSureTableViewCell.h
//  TheParty
//
//  Created by fuz-bmac on 2018/11/6.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface Find_QuesstionSureTableViewCell : UITableViewCell

@property (nonatomic, strong) UILabel *sureTitle;

@property (nonatomic, strong) UILabel *subjectL;

@property (nonatomic, strong)  UIView *backView;


- (void)setDic:(NSDictionary *)dic;

@end
