//
//  Me_messageTableViewCell.m
//  TheParty
//
//  Created by macmini on 2018/8/17.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Me_messageTableViewCell.h"

@implementation Me_messageTableViewCell

- (instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{
    self = [super initWithStyle:style reuseIdentifier:reuseIdentifier];
    if (self) {
        [self createUI];
    }
    return self;
}

- (void)createUI{
    
    self.IsView = [[UIView alloc] initWithFrame:CGRectMake(16+52, 17, 9, 9)];
    self.IsView.layer.masksToBounds = YES;
    self.IsView.layer.cornerRadius = 4.5;
    [self.contentView addSubview:self.IsView];
    
    self.ChooseB = [UIButton buttonWithType:UIButtonTypeCustom];
    self.ChooseB.frame = CGRectMake( 16 , self.centerY, 20, 20);
    [self.ChooseB setBackgroundImage:[UIImage imageNamed:@"message_quan"] forState:UIControlStateNormal];
    [self.ChooseB setBackgroundImage:[UIImage imageNamed:@"message_gou"] forState:UIControlStateSelected];
    [self.contentView addSubview:self.ChooseB];
    
    
    self.delieL = [[UILabel alloc] initWithFrame:CGRectMake(SCREEN_W - 85+52, 16, 75, 11)];
    self.delieL.textColor = UIColorFromRGBA(0xB0AFAF, 1);
    self.delieL.textAlignment = 2;
    self.delieL.font = Font(11);
    [self.contentView addSubview:self.delieL];
    
    self.titleL = [[UILabel alloc] initWithFrame:CGRectMake(CGRectGetMaxX(self.IsView.frame) + 10, 14, SCREEN_W - 85 -(CGRectGetMaxX(self.IsView.frame) + 10) , 15)];
    self.titleL.textColor = UIColorFromRGBA(0x4D4C4C, 1);
    self.titleL.font = Font(15);
    [self.contentView addSubview:self.titleL];
    
    self.subjectL = [[UILabel alloc] initWithFrame:CGRectMake(16 +52, CGRectGetMaxY(self.titleL.frame) + 10, SCREEN_W - 26 , 15)];
    self.subjectL.textColor = UIColorFromRGBA(0xB0AFAF, 1);
    self.subjectL.font = Font(12);
    self.subjectL.numberOfLines = 0;
    [self.contentView addSubview:self.subjectL];
    
}

- (void)SetModel:(MessageModel *)Model{
    if ([Model.type integerValue] == 1) {
        self.titleL.text = @"系统消息";
    }else{
         self.titleL.text = @"投稿消息";
    }
    self.delieL.text = Model.ctime;
    self.subjectL.text = Model.message;
    
    CGSize size = CGSizeMake(SCREEN_W - 26, MAXFLOAT);
    //设置高度宽度的最大限度
    CGRect rect = [self.subjectL.text boundingRectWithSize:size options:NSStringDrawingUsesFontLeading|NSStringDrawingTruncatesLastVisibleLine|NSStringDrawingUsesLineFragmentOrigin attributes:@{NSFontAttributeName : [UIFont systemFontOfSize:12]} context:nil];
    
    self.subjectL.frame =CGRectMake(16 +52, CGRectGetMaxY(self.titleL.frame) + 10, SCREEN_W - 26, rect.size.height +12);
    
    if ([Model.is_see integerValue] == 0) {
        self.IsView.backgroundColor = [UIColor redColor];
    }else{
        self.IsView.backgroundColor = UIColorFromRGBA(0x999999, 1);
    }
    
    self.ChooseB.selected = Model.Is;
    
}

@end
