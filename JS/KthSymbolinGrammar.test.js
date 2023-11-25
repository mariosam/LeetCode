/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { kthGrammar } from './KthSymbolinGrammar.js'

TEST('Starting KthSymbolinGrammar test...', (t) => {
    //Test 1
    let want = 0
    let got = kthGrammar( 1, 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = kthGrammar( 2, 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = kthGrammar( 2, 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
