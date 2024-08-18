/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { lemonadeChange } from './LemonadeChange.js'

TEST('Starting LemonadeChange test...', (t) => {
    //Test 1
    let want = true
    let got = lemonadeChange( [5,5,5,10,20] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = lemonadeChange( [5,5,10,10,20] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
