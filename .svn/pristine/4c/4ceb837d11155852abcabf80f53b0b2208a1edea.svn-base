//
//  Find_QuesstionSureTableViewCell.m
//  TheParty
//
//  Created by fuz-bmac on 2018/11/6.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Find_QuesstionSureTableViewCell.h"

@implementation Find_QuesstionSureTableViewCell

- (instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{
    self = [super initWithStyle:style reuseIdentifier:reuseIdentifier];
    if (self) {
        [self createUI];
    }
    return self;
}

- (void)createUI{
    self.backView = [[UIView alloc] initWithFrame:CGRectMake(16, 0, SCREEN_W -32, 150)];
    self.backView.backgroundColor = [UIColor whiteColor];
    self.backView.layer.cornerRadius = 5;
    self.backView.layer.masksToBounds = YES;
    [self.contentView addSubview:self.backView];
    
    
    self.sureTitle = [[UILabel alloc] initWithFrame:CGRectMake(11, 15, 100, 16)];
    self.sureTitle.font = Font(16);
    self.sureTitle.textColor = COLOR(51, 51, 51);
    [self.backView addSubview:self.sureTitle];
    
    UILabel *line =[[UILabel alloc] initWithFrame:CGRectMake(11, CGRectGetMaxY(self.sureTitle.frame) + 13, SCREEN_W -32-22    , 0.5)];
    line.backgroundColor = COLOR(247, 247, 247);
    [self.backView addSubview:line];
    
    UILabel *Title = [[UILabel alloc] initWithFrame:CGRectMake(11,CGRectGetMaxY(line.frame) + 15, 100, 16)];
    Title.font = Font(16);
    Title.text = @"答案解析：";
    Title.textColor = COLOR(51, 51, 51);
    [self.backView addSubview:Title];
    
    self.subjectL = [[UILabel alloc] initWithFrame:CGRectMake(11, CGRectGetMaxY(Title.frame) + 10, SCREEN_W -22-32, 20)];
    self.subjectL.numberOfLines = 0;
    self.subjectL.textColor = COLOR(51, 51, 51);
    self.subjectL.font = Font(13);
    [self.backView addSubview:self.subjectL];

}


- (void)setDic:(NSDictionary *)dic{
    self.sureTitle.attributedText = [self title:[NSString stringWithFormat:@"正确答案：%@",dic[@"ransure"]] andchanggeText:dic[@"ransure"]];
    self.subjectL.text = dic[@"sureSubject"];
    self.subjectL.frame = CGRectMake(11, 78, SCREEN_W -22-32, [self getSpaceLabelHeight:dic[@"sureSubject"] withWidh:SCREEN_W -22-32]);
    self.backView.frame = CGRectMake(16, 0, SCREEN_W -32, 100 + self.subjectL.frame.size.height);
}

- (NSMutableAttributedString *)title:(NSString *)str andchanggeText:(NSString *)string{
    NSMutableAttributedString *hintString=[[NSMutableAttributedString alloc]initWithString:str];
    //获取要调整颜色的文字位置,调整颜色
    NSRange range1=[[hintString string]rangeOfString:string];
    [hintString addAttribute:NSForegroundColorAttributeName value:[UIColor redColor] range:range1];
    [hintString addAttribute:NSFontAttributeName value:[UIFont systemFontOfSize:16] range:range1];
    return hintString;
}



-(CGFloat)getSpaceLabelHeight:(NSString *)str withWidh:(CGFloat)width
{
    
    CGSize size = CGSizeMake(width, MAXFLOAT);//设置高度宽度的最大限度
    CGRect rect  =[[NSString stringWithFormat:@"%@",str] boundingRectWithSize:size options:NSStringDrawingUsesFontLeading|NSStringDrawingTruncatesLastVisibleLine|NSStringDrawingUsesLineFragmentOrigin attributes:@{NSFontAttributeName : [UIFont systemFontOfSize:13]} context:nil];
    return rect.size.height;
    
}

@end
