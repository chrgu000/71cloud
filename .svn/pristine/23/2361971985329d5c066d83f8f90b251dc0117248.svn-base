//
//  RedHeartViewController.m
//  TheParty
//
//  Created by macmini on 2018/7/31.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "RedHeartViewController.h"
#import <WebKit/WebKit.h>
#import "ContributeViewController.h"
@interface RedHeartViewController ()<WKUIDelegate,WKNavigationDelegate>
{
    UIView *Backview;
    
}

@property (nonatomic, strong) WKWebView *wkWebView;
@property (nonatomic, strong) UIProgressView *progressView;
@property (nonatomic, strong) WKWebViewConfiguration *wkConfig;

@end

@implementation RedHeartViewController

#pragma mark - 初始化wkWebView

- (WKWebViewConfiguration *)wkConfig {
    if (!_wkConfig) {
        _wkConfig = [[WKWebViewConfiguration alloc] init];
        _wkConfig.allowsInlineMediaPlayback = YES;
        _wkConfig.allowsPictureInPictureMediaPlayback = YES;
    }
    return _wkConfig;
}

- (WKWebView *)wkWebView {
    if (!_wkWebView) {
        _wkWebView = [[WKWebView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H-64 -36) configuration:self.wkConfig];
        _wkWebView.backgroundColor = [UIColor whiteColor];
        _wkWebView.navigationDelegate = self;
        _wkWebView.UIDelegate = self;
        [self.view addSubview:_wkWebView];
    }
    return _wkWebView;
}

- (void)viewDidLoad {
    [super viewDidLoad];
    self.view.backgroundColor = [UIColor whiteColor];
    self.title = @"一颗红心";
    self.progressView = [[UIProgressView alloc] initWithFrame:CGRectMake(0, 0, [[UIScreen mainScreen] bounds].size.width, 2)];
    self.progressView.backgroundColor = [UIColor blueColor];
    //设置进度条的高度，下面这句代码表示进度条的宽度变为原来的1倍，高度变为原来的1.5倍.
    self.progressView.transform = CGAffineTransformMakeScale(1.0f, 1.5f);
    [self.view addSubview:self.progressView];
    [self.wkWebView addObserver:self forKeyPath:@"estimatedProgress" options:NSKeyValueObservingOptionNew context:nil];
    [self CreateNav];
    [self startLoad];
    
}

- (void)setEmptyPlaceholder{
    Backview = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H - 64 - 44)];
    Backview.userInteractionEnabled = YES;
    UIImageView *imgV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, 184, 137)];
    imgV.center = Backview.center;
    imgV.image = [UIImage imageNamed:@"NoInter"];
    imgV.userInteractionEnabled = YES;
    [Backview addSubview:imgV];
    
    UILabel *lab = [[UILabel alloc] initWithFrame:CGRectMake(0,CGRectGetMaxY(imgV.frame)+ 12, SCREEN_W, 15)];
    lab.font = Font(15);
    lab.textColor = UIColorFromRGBA(0x000000, 1);
    lab.text = @"点击屏幕，重新加载";
    lab.textAlignment = 1;
    [Backview addSubview:lab];
    
    UITapGestureRecognizer *click = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(refresh)];
    [Backview addGestureRecognizer:click];
    [self.view addSubview:Backview];
    
}

- (void)refresh{
    [Backview removeFromSuperview];
    Backview = nil;
    [self startLoad];
}


- (void)CreateNav{
    
    UIButton *rightB = [[UIButton alloc] initWithFrame:CGRectMake(0, 0,30, 30)];
    [rightB setImage:[UIImage imageNamed:@"new_icon_Share"] forState:UIControlStateNormal];
    [rightB addTarget:self action:@selector(rightShare) forControlEvents:UIControlEventTouchUpInside];
    self.navigationItem.rightBarButtonItem = [[UIBarButtonItem alloc] initWithCustomView:rightB];
 
}

- (void)CreateDown{
    UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
    if (kDevice_Is_iPhoneX) {
        button.frame = CGRectMake(0, SCREEN_H - 50-88, SCREEN_W, 50);
    }else{
        button.frame = CGRectMake(0, SCREEN_H - 36-64, SCREEN_W, 36);
    }
    button.backgroundColor = [UIColor redColor];
    [button setTitle:@"我要投稿" forState:UIControlStateNormal];
    [button setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [button addTarget:self action:@selector(ContributeAction) forControlEvents:UIControlEventTouchUpInside];
    [self.view addSubview:button];
}

- (void)rightShare{
    NSLog(@"share");
}

- (void)ContributeAction{
    [[UIHelper sharedSingleton] pushVC:@"ContributeViewController" vc:self parames:nil];
}

#pragma mark - start load web
- (void)startLoad {
    
    NSString *urlString= @"https://api.cloudcpc.com/home/Article/getHeartIndex";
//    urlString = [NSString stringWithFormat:@"%@%@",@"http://www.party.com",@"/Home/Heart/getIndex"];
    
    NSMutableURLRequest *request = [NSMutableURLRequest requestWithURL:[NSURL URLWithString:urlString]];
    request.timeoutInterval = 15.0f;
    [self.wkWebView loadRequest:request];
}

#pragma mark - 监听
/*
 *4.在监听方法中获取网页加载的进度，并将进度赋给progressView.progress
 */
- (void)observeValueForKeyPath:(NSString *)keyPath ofObject:(id)object change:(NSDictionary<NSString *,id> *)change context:(void *)context {
    
    if ([keyPath isEqualToString:@"estimatedProgress"]) {
        self.progressView.progress = self.wkWebView.estimatedProgress;
        if (self.progressView.progress == 1) {
            /*
             *添加一个简单的动画，将progressView的Height变为1.4倍
             *动画时长0.25s，延时0.3s后开始动画
             *动画结束后将progressView隐藏
             */
            WEAKSELF
            [UIView animateWithDuration:0.25f delay:0.3f options:UIViewAnimationOptionCurveEaseOut animations:^{
                weakSelf.progressView.transform = CGAffineTransformMakeScale(1.0f, 1.4f);
            } completion:^(BOOL finished) {
                weakSelf.progressView.hidden = YES;
                
            }];
        }
    }else{
        [super observeValueForKeyPath:keyPath ofObject:object change:change context:context];
        
    }
}

#pragma mark - WKWKNavigationDelegate Methods

/*
 *5.在WKWebViewd的代理中展示进度条，加载完成后隐藏进度条
 */
//开始加载
- (void)webView:(WKWebView *)webView didStartProvisionalNavigation:(WKNavigation *)navigation {
    NSLog(@"开始加载网页");
    //开始加载网页时展示出progressView
    self.progressView.hidden = NO;
    //开始加载网页的时候将progressView的Height恢复为1.5倍
    self.progressView.transform = CGAffineTransformMakeScale(1.0f, 1.5f);
    //防止progressView被网页挡住
    [self.view bringSubviewToFront:self.progressView];
    [self showHUD:nil];

}

//加载完成
- (void)webView:(WKWebView *)webView didFinishNavigation:(WKNavigation *)navigation {
    NSLog(@"加载完成");
    //加载完成后隐藏progressView 
    self.progressView.hidden = YES;
    [self hideHUD];
    [self CreateDown];
}


//加载失败
- (void)webView:(WKWebView *)webView didFailProvisionalNavigation:(WKNavigation *)navigation withError:(NSError *)error {
    NSLog(@"加载失败");
    //加载失败同样需要隐藏progressView
    self.progressView.hidden = YES;
     [self hideHUD];
     [self showError:@"网络连接失败!"];
    [self  setEmptyPlaceholder];
}

//页面跳转
- (void)webView:(WKWebView *)webView decidePolicyForNavigationAction:(WKNavigationAction *)navigationAction decisionHandler:(void (^)(WKNavigationActionPolicy))decisionHandler{
    //允许页面跳转
    //    NSURL *URL = navigationAction.request.URL;
    //    NSString *scheme = URL.absoluteString;
    //    if ([scheme isEqualToString:@"https://suan.co-links.com/app.php/v0.0.1/invitation?unionid="]) {
    //        [[UIHelper sharedSingleton] pushVC:@"InviteCardViewController" vc:self parames:nil];
    //        decisionHandler(WKNavigationActionPolicyCancel);
    //        return;
    //    }
    decisionHandler(WKNavigationActionPolicyAllow);
    
}

#pragma mark - Tool bar item action

- (void)goBackAction {
    if ([self.wkWebView canGoBack]) {
        [self.wkWebView goBack];
    }
}

- (void)goForwardAction {
    if ([self.wkWebView canGoForward]) {
        [self.wkWebView goForward];
    }
}

- (void)refreshAction {
    [self.wkWebView reload];
}

- (void)dealloc
{
    [self.wkWebView removeObserver:self forKeyPath:@"estimatedProgress"];
}
/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
