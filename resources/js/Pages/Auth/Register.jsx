//import { useEffect } from 'react';
//import GuestLayout from '@/Layouts/GuestLayout';
//import InputError from '@/Components/InputError';
//import InputLabel from '@/Components/InputLabel';
//import PrimaryButton from '@/Components/PrimaryButton';
//import TextInput from '@/Components/TextInput';
//import { Head, Link, useForm } from '@inertiajs/inertia-react';
//
//export default function Register() {
//    const { data, setData, post, processing, errors, reset } = useForm({
//        name: '',
//        email: '',
//        password: '',
//        password_confirmation: '',
//    });
//
//    useEffect(() => {
//        return () => {
//            reset('password', 'password_confirmation');
//        };
//    }, []);
//
//    const onHandleChange = (event) => {
//        setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
//    };
//
//    const submit = (e) => {
//        e.preventDefault();
//
//        post(route('register'));
//    };
//
//    return (
//        <GuestLayout>
//            <Head title="Register" />
//
//            <form onSubmit={submit}>
//                <div>
//                    <InputLabel forInput="name" value="Name" />
//
//                    <TextInput
//                        id="name"
//                        name="name"
//                        value={data.name}
//                        className="mt-1 block w-full"
//                        autoComplete="name"
//                        isFocused={true}
//                        handleChange={onHandleChange}
//                        required
//                    />
//
//                    <InputError message={errors.name} className="mt-2" />
//                </div>
//
//                <div className="mt-4">
//                    <InputLabel forInput="email" value="Email" />
//
//                    <TextInput
//                        id="email"
//                        type="email"
//                        name="email"
//                        value={data.email}
//                        className="mt-1 block w-full"
//                        autoComplete="username"
//                        handleChange={onHandleChange}
//                        required
//                    />
//
//                    <InputError message={errors.email} className="mt-2" />
//                </div>
//
//                <div className="mt-4">
//                    <InputLabel forInput="password" value="Password" />
//
//                    <TextInput
//                        id="password"
//                        type="password"
//                        name="password"
//                        value={data.password}
//                        className="mt-1 block w-full"
//                        autoComplete="new-password"
//                        handleChange={onHandleChange}
//                        required
//                    />
//
//                    <InputError message={errors.password} className="mt-2" />
//                </div>
//
//                <div className="mt-4">
//                    <InputLabel forInput="password_confirmation" value="Confirm Password" />
//
//                    <TextInput
//                        id="password_confirmation"
//                        type="password"
//                        name="password_confirmation"
//                        value={data.password_confirmation}
//                        className="mt-1 block w-full"
//                        handleChange={onHandleChange}
//                        required
//                    />
//
//                    <InputError message={errors.password_confirmation} className="mt-2" />
//                </div>
//
//                <div className="flex items-center justify-end mt-4">
//                    <Link
//                        href={route('login')}
//                        className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
//                    >
//                        Already registered?
//                    </Link>
//
//                    <PrimaryButton className="ml-4" processing={processing}>
//                        Register
//                    </PrimaryButton>
//                </div>
//            </form>
//        </GuestLayout>
//    );
//}
//
import { useEffect } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import TextField from '@mui/material/TextField';
import Link from '@mui/material/Link';
import { Head, useForm } from '@inertiajs/inertia-react';
import Navbar from '@/Components/Navbar';
import { createTheme, ThemeProvider } from '@mui/material/styles';
import CssBaseline from '@mui/material/CssBaseline';
import Box from '@mui/material/Box';
import LockOutlinedIcon from '@mui/icons-material/LockOutlined';
import Typography from '@mui/material/Typography';
import Container from '@mui/material/Container';
import Avatar from '@mui/material/Avatar';
import Button from '@mui/material/Button';
import Grid from '@mui/material/Grid';
import Footer from '@/Components/Footer';


const theme = createTheme();
export default function Register({ status }) {
  const { data, setData, post, processing, errors, reset } = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
  });

  useEffect(() => {
    return () => {
      reset('password', 'password_confirmation');
    };
  }, []);

  const onHandleChange = (event) => {
    setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
  };

  const submit = (e) => {
    e.preventDefault();

    post(route('register'));
  };


  return (
    <>
      <Navbar />
      <div className="main">
        <GuestLayout>
          <Head title="Register" />
          {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}
          <ThemeProvider theme={theme}>
            <Container component="main" maxWidth="xs">
              <CssBaseline />
              <Box
                sx={{
                  marginTop: 8,
                  display: 'flex',
                  flexDirection: 'column',
                  alignItems: 'center',
                }}
              >
                <Avatar sx={{ m: 1, bgcolor: 'secondary.main' }}>
                  <LockOutlinedIcon />
                </Avatar>
                <Typography component="h1" variant="h5">
                  Sign up
                </Typography>
                <Box component="form" onSubmit={submit} noValidate sx={{ mt: 1 }} >
                  <TextField
                    required
                    margin="normal"
                    fullWidth
                    id="name"
                    type="name"
                    name="name"
                    value={data.name}
                    className="mt-1 block w-full"
                    autoComplete="username"
                    onChange={onHandleChange}
                    label="Username"
                  />
                  <InputError message={errors.name} className="mt-2" />
                  <TextField
                    margin="normal"
                    fullWidth
                    required
                    id="email"
                    type="email"
                    name="email"
                    value={data.email}
                    className="mt-1 block w-full"
                    autoComplete="email"
                    onChange={onHandleChange}
                    label="Email Address"
                  />
                  <InputError message={errors.email} className="mt-2" />
                  <TextField
                    margin="normal"
                    required
                    fullWidth
                    name="password"
                    label="Password"
                    type="password"
                    id="password"
                    autoComplete="current-password"
                    onChange={onHandleChange}
                  />
                  <InputError message={errors.password} className="mt-2" />
                  <TextField
                    margin="normal"
                    required
                    fullWidth
                    name="password_confirmation"
                    label="Confirm Password"
                    type="password_confirmation"
                    id="password_confirmation"
                    onChange={onHandleChange}
                    value={data.password_confirmation}
                  />
                  <InputError message={errors.password_confirmation} className="mt-2" />
                  <Button
                    type="submit"
                    fullWidth
                    variant="contained"
                    sx={{ mt: 3, mb: 2 }}
                  >
                    Sign In
                  </Button>
                  <Grid container>
                    <Grid item>
                      <Link href="http://localhost:8000/login" variant="body2">
                        {"Already registered? Sign In!"}
                      </Link>
                    </Grid>
                  </Grid>
                </Box>
              </Box>
            </Container>
          </ThemeProvider>
        </GuestLayout>
      </div>
      <Footer />
    </>
  );
}