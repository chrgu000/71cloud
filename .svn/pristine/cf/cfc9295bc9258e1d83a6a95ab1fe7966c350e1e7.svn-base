//
//  Find_QuesstionHeardTableViewCell.m
//  TheParty
//
//  Created by fuz-bmac on 2018/11/2.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Find_QuesstionHeardTableViewCell.h"

@implementation Find_QuesstionHeardTableViewCell

- (instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{
    self = [super initWithStyle:style reuseIdentifier:reuseIdentifier];
    if (self) {
        [self createUI];
    }
    return self;
}

- (void)createUI{
    self.questionTitle = [[UILabel alloc] initWithFrame:CGRectMake(16, 5, SCREEN_W -32, 18)];
    self.questionTitle.font = Font( 16);
    self.questionTitle.textColor = COLOR(51, 51, 51);
    self.questionTitle.numberOfLines = 0;
    [self.contentView addSubview:self.questionTitle];
}

- (void)setStr:(NSString *)str{
    
    self.questionTitle.text = [NSString stringWithFormat:@"        %@",str];
    self.questionTitle.frame = CGRectMake(16, 10, SCREEN_W-32, [self getSpaceLabelHeight:str withWidh:SCREEN_W -32] +20);
    
}

-(CGFloat)getSpaceLabelHeight:(NSString *)str withWidh:(CGFloat)width
{

    CGSize size = CGSizeMake(width, MAXFLOAT);//设置高度宽度的最大限度
    CGRect rect  =[str boundingRectWithSize:size options:NSStringDrawingUsesFontLeading|NSStringDrawingTruncatesLastVisibleLine|NSStringDrawingUsesLineFragmentOrigin attributes:@{NSFontAttributeName : [UIFont systemFontOfSize:16]} context:nil];
    
    return rect.size.height;
    
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
