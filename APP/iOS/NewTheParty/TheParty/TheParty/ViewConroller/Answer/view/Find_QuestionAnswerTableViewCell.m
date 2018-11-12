//
//  ExamineDetailViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Find_QuestionAnswerTableViewCell.h"

@implementation Find_QuestionAnswerTableViewCell
-(instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{
    if (self == [super initWithStyle:style reuseIdentifier:reuseIdentifier]) {
        self = [[NSBundle mainBundle]loadNibNamed:@"Find_QuestionAnswerTableViewCell" owner:nil options:nil][0];
    }
    return self;
}
- (void)awakeFromNib {
    [super awakeFromNib];
    // Initialization code


}

-(void)setType:(answerType)type{
    _type = type;
    
    switch (_type) {
        case answerDefaultA:
            self.img.image = [UIImage imageNamed:@"zimu_a.png"];
            self.title.textColor = UIColorFromRGBA(0x151515,1);
            break;
        case answerDefaultB:
            self.img.image = [UIImage imageNamed:@"zimu_b.png"];
            self.title.textColor = UIColorFromRGBA(0x151515,1);
            break;
        case answerDefaultC:
            self.img.image = [UIImage imageNamed:@"zimu_c.png"];
            self.title.textColor = UIColorFromRGBA(0x151515,1);
            break;
        case answerDefaultD:
            self.img.image = [UIImage imageNamed:@"zimu_d.png"];
            self.title.textColor = UIColorFromRGBA(0x151515,1);
            break;
        case answerRightA:
            self.img.image = [UIImage imageNamed:@"zimu_lva.png"];
            self.title.textColor = COLOR(0, 204, 118);
            break;
        case answerRightB:
            self.img.image = [UIImage imageNamed:@"zimu_lvb.png"];
            self.title.textColor = COLOR(0, 204, 118);
            break;
        case answerRightC:
            self.img.image = [UIImage imageNamed:@"zimu_lvc.png"];
            self.title.textColor = COLOR(0, 204, 118);
            break;
        case answerRightD:
            self.img.image = [UIImage imageNamed:@"zimu_lvd.png"];
            self.title.textColor = COLOR(0, 204, 118);
            break;
        case answerErrorA:
            self.img.image = [UIImage imageNamed:@"zimu_errora"];
            self.title.textColor =COLOR(239, 81, 81);
            break;
        case answerErrorB:
            self.img.image = [UIImage imageNamed:@"zimu_errorb"];
            self.title.textColor = COLOR(239, 81, 81);
            break;
        case answerErrorC:
            self.img.image = [UIImage imageNamed:@"zimu_errorc"];
            self.title.textColor = COLOR(239, 81, 81);
            break;
        case answerErrorD:
            self.img.image = [UIImage imageNamed:@"zimu_errord"];
            self.title.textColor = COLOR(239, 81, 81);
            break;
        default:
            break;
    }
}
- (void)setSelected:(BOOL)selected animated:(BOOL)animated {
    [super setSelected:selected animated:animated];

    // Configure the view for the selected state
}

@end
