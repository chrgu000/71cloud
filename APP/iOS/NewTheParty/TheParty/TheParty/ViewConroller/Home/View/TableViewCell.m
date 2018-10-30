//
//  TableViewCell.m
//  TheParty
//
//  Created by macmini on 2018/8/17.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "TableViewCell.h"

@implementation TableViewCell

- (void)awakeFromNib {
    [super awakeFromNib];
    // Initialization code
    self.UserImageV.layer.masksToBounds = YES;
    self.UserImageV.layer.cornerRadius = 30;
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
