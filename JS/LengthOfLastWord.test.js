/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { lengthOfLastWord } from './LengthOfLastWord.js'

TEST('Starting LengthOfLastWord test...', (t) => {
    //Test 1
    let want = 5
    let got = lengthOfLastWord( "Hello World" )
    t.assert( want === got, "Expect: 5")
    //Test 2
    want = 4
    got = lengthOfLastWord( "   fly me   to   the moon  " )
    t.assert( want === got, "Expect: 4")
    //Test 3
    want = 6
    got = lengthOfLastWord( "luffy is still joyboy" )
    t.assert( want === got, "Expect: 6")
    //Test 4
    want = 1
    got = lengthOfLastWord( "a" )
    t.assert( want === got, "Expect: 1")

    t.end()
})
  
