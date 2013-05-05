using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace FileManagementSystem
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void createLibMenuItem_Click(object sender, RoutedEventArgs e)
        {
            CreateLibrary cl = new CreateLibrary();
            cl.ShowDialog();
        }

        private void importLibBtn_Click(object sender, RoutedEventArgs e)
        {
            Microsoft.Win32.OpenFileDialog ofd = new Microsoft.Win32.OpenFileDialog();

            if (ofd.ShowDialog() == true)
            {

            }
        }

        private void backupBtn_Click(object sender, RoutedEventArgs e)
        {

        }
    }
}
