--
-- PostgreSQL database dump
--

-- Dumped from database version 16.1
-- Dumped by pg_dump version 17.0

-- Started on 2026-08-05 14:40:38

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 215 (class 1259 OID 24579)
-- Name: atendimento; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.atendimento (
    id integer NOT NULL,
    id_cliente integer NOT NULL,
    id_funcionario integer NOT NULL
);


ALTER TABLE public.atendimento OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 24582)
-- Name: atendimento_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.atendimento_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.atendimento_id_seq OWNER TO postgres;

--
-- TOC entry 4852 (class 0 OID 0)
-- Dependencies: 216
-- Name: atendimento_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.atendimento_id_seq OWNED BY public.atendimento.id;


--
-- TOC entry 217 (class 1259 OID 24583)
-- Name: cliente; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cliente (
    id_cliente integer NOT NULL,
    cpf character(11) NOT NULL,
    nome character varying(100) NOT NULL,
    data_nasc date,
    telefone character(9)
);


ALTER TABLE public.cliente OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 24586)
-- Name: cliente_id_cliente_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cliente_id_cliente_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.cliente_id_cliente_seq OWNER TO postgres;

--
-- TOC entry 4853 (class 0 OID 0)
-- Dependencies: 218
-- Name: cliente_id_cliente_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cliente_id_cliente_seq OWNED BY public.cliente.id_cliente;


--
-- TOC entry 219 (class 1259 OID 24587)
-- Name: funcionario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.funcionario (
    id_funcionario integer NOT NULL,
    cpf character(11) NOT NULL,
    data_nasc date,
    nome character varying(100) NOT NULL,
    telefone character(9),
    curriculo character varying(200)
);


ALTER TABLE public.funcionario OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 24590)
-- Name: funcionario_id_funcionario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.funcionario_id_funcionario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.funcionario_id_funcionario_seq OWNER TO postgres;

--
-- TOC entry 4854 (class 0 OID 0)
-- Dependencies: 220
-- Name: funcionario_id_funcionario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.funcionario_id_funcionario_seq OWNED BY public.funcionario.id_funcionario;


--
-- TOC entry 221 (class 1259 OID 24591)
-- Name: produto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.produto (
    id integer NOT NULL,
    nome character varying(100) NOT NULL,
    categoria character(1) NOT NULL,
    descricao character varying(200) NOT NULL,
    preco numeric(10,2) NOT NULL,
    qtd integer NOT NULL,
    codbarras character(11) NOT NULL
);


ALTER TABLE public.produto OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 24594)
-- Name: produto_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.produto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.produto_id_seq OWNER TO postgres;

--
-- TOC entry 4855 (class 0 OID 0)
-- Dependencies: 222
-- Name: produto_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.produto_id_seq OWNED BY public.produto.id;


--
-- TOC entry 223 (class 1259 OID 24595)
-- Name: realiza_venda; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.realiza_venda (
    id integer NOT NULL,
    nota_fiscal character(12) NOT NULL,
    id_atendimento integer NOT NULL,
    id_venda integer NOT NULL
);


ALTER TABLE public.realiza_venda OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 24598)
-- Name: realiza_venda_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.realiza_venda_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.realiza_venda_id_seq OWNER TO postgres;

--
-- TOC entry 4856 (class 0 OID 0)
-- Dependencies: 224
-- Name: realiza_venda_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.realiza_venda_id_seq OWNED BY public.realiza_venda.id;


--
-- TOC entry 225 (class 1259 OID 24599)
-- Name: venda; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.venda (
    id integer NOT NULL,
    codbarras character(11) NOT NULL,
    id_prod integer NOT NULL
);


ALTER TABLE public.venda OWNER TO postgres;

--
-- TOC entry 226 (class 1259 OID 24602)
-- Name: venda_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.venda_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.venda_id_seq OWNER TO postgres;

--
-- TOC entry 4857 (class 0 OID 0)
-- Dependencies: 226
-- Name: venda_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.venda_id_seq OWNED BY public.venda.id;


--
-- TOC entry 4659 (class 2604 OID 24603)
-- Name: atendimento id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.atendimento ALTER COLUMN id SET DEFAULT nextval('public.atendimento_id_seq'::regclass);


--
-- TOC entry 4660 (class 2604 OID 24604)
-- Name: cliente id_cliente; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cliente ALTER COLUMN id_cliente SET DEFAULT nextval('public.cliente_id_cliente_seq'::regclass);


--
-- TOC entry 4661 (class 2604 OID 24605)
-- Name: funcionario id_funcionario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.funcionario ALTER COLUMN id_funcionario SET DEFAULT nextval('public.funcionario_id_funcionario_seq'::regclass);


--
-- TOC entry 4662 (class 2604 OID 24606)
-- Name: produto id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produto ALTER COLUMN id SET DEFAULT nextval('public.produto_id_seq'::regclass);


--
-- TOC entry 4663 (class 2604 OID 24607)
-- Name: realiza_venda id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.realiza_venda ALTER COLUMN id SET DEFAULT nextval('public.realiza_venda_id_seq'::regclass);


--
-- TOC entry 4664 (class 2604 OID 24608)
-- Name: venda id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.venda ALTER COLUMN id SET DEFAULT nextval('public.venda_id_seq'::regclass);


--
-- TOC entry 4835 (class 0 OID 24579)
-- Dependencies: 215
-- Data for Name: atendimento; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.atendimento (id, id_cliente, id_funcionario) FROM stdin;
\.


--
-- TOC entry 4837 (class 0 OID 24583)
-- Dependencies: 217
-- Data for Name: cliente; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cliente (id_cliente, cpf, nome, data_nasc, telefone) FROM stdin;
1	86439405004	Eduardo Tedesco	2009-01-19	198091119
\.


--
-- TOC entry 4839 (class 0 OID 24587)
-- Dependencies: 219
-- Data for Name: funcionario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.funcionario (id_funcionario, cpf, data_nasc, nome, telefone, curriculo) FROM stdin;
1	67890123456	1998-01-05	 Fábio Rocha	967890123	Formação em Floricultura
\.


--
-- TOC entry 4841 (class 0 OID 24591)
-- Dependencies: 221
-- Data for Name: produto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.produto (id, nome, categoria, descricao, preco, qtd, codbarras) FROM stdin;
\.


--
-- TOC entry 4843 (class 0 OID 24595)
-- Dependencies: 223
-- Data for Name: realiza_venda; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.realiza_venda (id, nota_fiscal, id_atendimento, id_venda) FROM stdin;
\.


--
-- TOC entry 4845 (class 0 OID 24599)
-- Dependencies: 225
-- Data for Name: venda; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.venda (id, codbarras, id_prod) FROM stdin;
\.


--
-- TOC entry 4858 (class 0 OID 0)
-- Dependencies: 216
-- Name: atendimento_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.atendimento_id_seq', 1, false);


--
-- TOC entry 4859 (class 0 OID 0)
-- Dependencies: 218
-- Name: cliente_id_cliente_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cliente_id_cliente_seq', 1, true);


--
-- TOC entry 4860 (class 0 OID 0)
-- Dependencies: 220
-- Name: funcionario_id_funcionario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.funcionario_id_funcionario_seq', 33, true);


--
-- TOC entry 4861 (class 0 OID 0)
-- Dependencies: 222
-- Name: produto_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.produto_id_seq', 1, false);


--
-- TOC entry 4862 (class 0 OID 0)
-- Dependencies: 224
-- Name: realiza_venda_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.realiza_venda_id_seq', 1, false);


--
-- TOC entry 4863 (class 0 OID 0)
-- Dependencies: 226
-- Name: venda_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.venda_id_seq', 1, false);


--
-- TOC entry 4666 (class 2606 OID 24610)
-- Name: atendimento atendimento_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.atendimento
    ADD CONSTRAINT atendimento_pkey PRIMARY KEY (id);


--
-- TOC entry 4668 (class 2606 OID 24612)
-- Name: cliente cliente_cpf_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_cpf_key UNIQUE (cpf);


--
-- TOC entry 4670 (class 2606 OID 24614)
-- Name: cliente cliente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (id_cliente);


--
-- TOC entry 4672 (class 2606 OID 24616)
-- Name: funcionario funcionario_cpf_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.funcionario
    ADD CONSTRAINT funcionario_cpf_key UNIQUE (cpf);


--
-- TOC entry 4674 (class 2606 OID 24618)
-- Name: funcionario funcionario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.funcionario
    ADD CONSTRAINT funcionario_pkey PRIMARY KEY (id_funcionario);


--
-- TOC entry 4676 (class 2606 OID 24620)
-- Name: produto produto_codbarras_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produto
    ADD CONSTRAINT produto_codbarras_key UNIQUE (codbarras);


--
-- TOC entry 4678 (class 2606 OID 24622)
-- Name: produto produto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produto
    ADD CONSTRAINT produto_pkey PRIMARY KEY (id);


--
-- TOC entry 4680 (class 2606 OID 24624)
-- Name: realiza_venda realiza_venda_nota_fiscal_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.realiza_venda
    ADD CONSTRAINT realiza_venda_nota_fiscal_key UNIQUE (nota_fiscal);


--
-- TOC entry 4682 (class 2606 OID 24626)
-- Name: realiza_venda realiza_venda_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.realiza_venda
    ADD CONSTRAINT realiza_venda_pkey PRIMARY KEY (id);


--
-- TOC entry 4684 (class 2606 OID 24628)
-- Name: venda venda_codbarras_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.venda
    ADD CONSTRAINT venda_codbarras_key UNIQUE (codbarras);


--
-- TOC entry 4686 (class 2606 OID 24630)
-- Name: venda venda_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.venda
    ADD CONSTRAINT venda_pkey PRIMARY KEY (id);


--
-- TOC entry 4687 (class 2606 OID 24631)
-- Name: atendimento atendimento_id_cliente_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.atendimento
    ADD CONSTRAINT atendimento_id_cliente_fkey FOREIGN KEY (id_cliente) REFERENCES public.cliente(id_cliente);


--
-- TOC entry 4688 (class 2606 OID 24636)
-- Name: atendimento atendimento_id_funcionario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.atendimento
    ADD CONSTRAINT atendimento_id_funcionario_fkey FOREIGN KEY (id_funcionario) REFERENCES public.funcionario(id_funcionario);


--
-- TOC entry 4689 (class 2606 OID 24641)
-- Name: realiza_venda realiza_venda_id_atendimento_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.realiza_venda
    ADD CONSTRAINT realiza_venda_id_atendimento_fkey FOREIGN KEY (id_atendimento) REFERENCES public.atendimento(id);


--
-- TOC entry 4690 (class 2606 OID 24646)
-- Name: realiza_venda realiza_venda_id_venda_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.realiza_venda
    ADD CONSTRAINT realiza_venda_id_venda_fkey FOREIGN KEY (id_venda) REFERENCES public.venda(id);


--
-- TOC entry 4691 (class 2606 OID 24651)
-- Name: venda venda_id_prod_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.venda
    ADD CONSTRAINT venda_id_prod_fkey FOREIGN KEY (id_prod) REFERENCES public.produto(id);


-- Completed on 2026-08-05 14:40:38

--
-- PostgreSQL database dump complete
--

