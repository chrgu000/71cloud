//
//  Find_QuesstionNextTableViewCell.m
//  TheParty
//
//  Created by fuz-bmac on 2018/11/2.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Find_QuesstionNextTableViewCell.h"

@implementation Find_QuesstionNextTableViewCell

- (instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{
    self = [super initWithStyle:style reuseIdentifier:reuseIdentifier];
    if (self) {
        [self createUI];
    }
    return self;
}

- (void)createUI{
    
    self.nextB = [UIButton buttonWithType:UIButtonTypeCustom];
    self.nextB.frame =CGRectMake((SCREEN_W -145)/2, 20, 145, 38);
    [self.nextB setTitle:@"确定" forState:UIControlStateNormal];
    self.nextB.layer.borderWidth = 0.5;
    self.nextB.layer.cornerRadius = 5;
    self.nextB.layer.borderColor = [UIColor redColor].CGColor;
    [self.nextB setTitleColor:[UIColor redColor] forState:UIControlStateNormal];
    self.nextB.titleLabel.font = Font(14);
    [self.contentView addSubview:self.nextB];
    
    
}



- (void)awakeFromNib {
    [super awakeFromNib];
    
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
