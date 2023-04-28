/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { bulbSwitch } from './BulbSwitcher.js'

TEST('Starting BulbSwitcher test...', (t) => {
    //Test 1
    let want = 1
    let got = bulbSwitch( 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = bulbSwitch( 0 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = bulbSwitch( 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
