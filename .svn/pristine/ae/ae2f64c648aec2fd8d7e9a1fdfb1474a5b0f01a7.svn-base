//
//  ExhibitionTableViewCell.m
//  TheParty
//
//  Created by macmini on 2018/8/4.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExhibitionTableViewCell.h"

@implementation ExhibitionTableViewCell


- (instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{
    self = [super initWithStyle:style reuseIdentifier:reuseIdentifier];
    if (self) {
        [self createUI];
    }
    return self;
}

- (void)createUI{
    
    UIView *backView = [[UIView alloc] initWithFrame:CGRectMake(16, 10, SCREEN_W -32, 236)];
    backView.backgroundColor = [UIColor whiteColor];
    backView.layer.cornerRadius = 4;
    [self.contentView addSubview:backView];
    
    backView.layer.shadowColor =UIColorFromRGBA(0xe83329, 1).CGColor;
    backView.layer.shadowOpacity = 0.15f;
    backView.layer.shadowRadius = 10.f;
    backView.layer.shadowOffset = CGSizeMake(0,0);
    
    self.imageV = [[UIImageView alloc] initWithFrame:CGRectMake(10, 10, SCREEN_W - 52, 122)];
    self.imageV.image = [UIImage imageNamed:@"yun_one"];
    [backView addSubview:self.imageV];
    
    self.titleL = [[UILabel alloc] initWithFrame:CGRectMake(10, CGRectGetMaxY(self.imageV.frame) + 8, SCREEN_W - 52, 12)];
    self.titleL.text = @"中国恒天集团“清风恒天”云展馆";
    self.titleL.textColor = UIColorFromRGBA(0x333333, 1);
    self.titleL.font = Font(12);
    [backView addSubview:self.titleL];
    
    self.subjectL = [[UILabel alloc] initWithFrame:CGRectMake(10, CGRectGetMaxY(self.titleL.frame) + 8, SCREEN_W - 52, 40)];
    self.subjectL.text = @"“清风恒天”云展馆720度全景展现中国恒天集团党风廉政建设工作，通过网上展馆进一步学习贯彻习近平新时代中国特色社会主义思想，落实全面从严治党，营造员工清正廉洁、企业风清气正的良好氛围。";
    self.subjectL.textColor = UIColorFromRGBA(0x333333, 1);
    self.subjectL.font = Font(10);
    self.subjectL.numberOfLines=0;
    [backView addSubview:self.subjectL];
    
    UIImageView *leftImageV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W - 90, 215, 11, 12)];
    leftImageV.image = [UIImage imageNamed:@"yun_renqi"];
    [backView addSubview:leftImageV];
    
    self.RQNum = [[UILabel alloc] initWithFrame:CGRectMake(CGRectGetMaxX(leftImageV.frame) + 5, 216, 53, 12)];
    self.RQNum.text = @"1333";
    self.RQNum.textColor = UIColorFromRGBA(0x333333, 1);
    self.RQNum.font = Font(10);
    [backView addSubview:self.RQNum];
}

@end
